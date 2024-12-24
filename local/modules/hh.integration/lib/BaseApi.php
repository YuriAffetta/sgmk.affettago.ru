<?php

namespace Mantix\HeadHunter;


use Bitrix\Main\ArgumentException;
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Web\Http;
use Bitrix\Main\Web\Http\Method;
use Bitrix\Main\Web\Http\Request;
use Bitrix\Main\Web\HttpClient;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Web\Uri;
use Psr\Http\Client\ClientExceptionInterface;

class BaseApi
{

    /**
     * @var mixed|string
     */
    protected $baseApiUrl = 'https://api.hh.ru/';
    protected $logFilte = '/local/modules/hh.integration/log.log';


    public function getOAuthUri(): string
    {

        $uri = new Uri('https://hh.ru/oauth/authorize');
        $uri->addParams([
            'response_type' => 'code',
            'client_id' => Settings::getClientId(),
            'state' => 'hh-auth',
            'redirect_uri' => Settings::getRedirectUri(),
        ]);
        return $uri->getUri();
    }

    public function getUserInfo(): array
    {
        $request = new Http\Request(
            Method::GET,
            (new Uri($this->baseApiUrl . 'me')),
            $this->getHeaders(),
            null,
        );
        //Debug::writeToFile($this->getHeaders(), '----', $this->logFilte);
        return $this->exec($request);
    }

    protected function getHeaders(): ?array
    {
        $params = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'User-Agent' => 'Sgmk.headhunter agent/1.0.1 (sgmk@sgmk.ru)'
        ];

        $accessToken = Settings::getAccessToken();
        if ($accessToken) {
            $params['Authorization'] = 'Bearer ' . $accessToken;
        }
        return $params;
    }

    private function exec(Http\Request $request): array
    {
        $status = 'error';
        $error = '';
        $result = [];
        try {
            $result = $this->sendRequest($request);
            $status = 'success';
        } catch (ClientExceptionInterface|\Exception $e) {
            $error = [
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
                'result' => $result,
            ];
            Debug::writeToFile($error, date('d-m-Y-H-i-s'), $this->logFilte);
            Settings::set('last_auth_error', $e->getMessage());
        }


        return [
            'status' => $status,
            'data' => $result,
            'error' => $error
        ];
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws ClientExceptionInterface
     * @throws \Exception
     */
    private function sendRequest(Http\Request $request): mixed
    {
        $httpClient = new HttpClient();
        $httpClient->sendRequest($request);

        $status = $httpClient->getStatus();
        $result = $httpClient->getResult();

        if (!$result && $status === 0) {
            throw new \Exception('Сервис недоступен', 503);
        }

        try {
            $result = Json::decode($result);
        } catch (ArgumentException $e) {
            throw new \Exception('Неверный ответ от сервера', 422);
        }

        if ($status !== 200) {
            throw new \Exception(json_encode($result), $status);
        }

        return $result;
    }

    /**
     * Обновление токена по refresh_token
     */
    public function refreshToken(): array
    {
        $request = new Http\Request(
            Method::POST,
            (new Uri($this->baseApiUrl . 'token')),
            $this->getHeaders(),
            new Http\FormStream([
                'grant_type' => 'refresh_token',
                'refresh_token' => Settings::getRefreshToken()
            ])
        );

        return $this->exec($request);
    }

    public function getVacancies(string $employerId): array
    {
        $request = new Http\Request(
            Method::GET,
            (new Uri($this->baseApiUrl . 'employers/' . $employerId . '/vacancies/active')),
	        $this->getHeaders(),
            null
        );

        return $this->exec($request);
    }

    /**
     * Возвращает access_token & refresh_token
     * @throws \Exception
     * @throws ClientExceptionInterface
     */
    public function getToken(string $code = ''): array
    {
        $request = new Http\Request(
            Method::POST,
            (new Uri($this->baseApiUrl . 'token')),
            $this->getHeaders(),
            new Http\FormStream([
                'grant_type' => 'authorization_code',
                'client_id' => Settings::getClientId(),
                'client_secret' => Settings::getClientSecret(),
                'redirect_uri' => Settings::getRedirectUri(),
                'code' => $code
            ])
        );

        return $this->exec($request);
    }

    public function getActiveVacancies($employerId, int $page = 1): array
    {
        $request = new Http\Request(
            Method::GET,
            (new Uri($this->baseApiUrl . 'vacancies')),
            $this->getHeaders(),
            new Http\FormStream([
                'employer_id' => $employerId,
                'per_page' => 100,
                'page' => $page,
            ])
        );

        return $this->exec($request);
    }
	
	public function getVacancyInfo(int $vacancyId): array
	{
		$request = new Http\Request(
			Method::GET,
			(new Uri($this->baseApiUrl . 'vacancies/' . $vacancyId)),
			$this->getHeaders(),
			null
		);
		
		return $this->exec($request);
	}
}
