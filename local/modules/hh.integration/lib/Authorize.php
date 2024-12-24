<?php

namespace Mantix\HeadHunter;


class Authorize
{

    public static function checkAuth(): void
    {
        if ($_REQUEST['code'] && $_REQUEST['state'] === 'hh-auth') {

            if ((new Authorize)->getToken($_REQUEST['code'])) {
                header('Location: /bitrix/admin/settings.php?mid=hh.integration&lang=ru');
            }
        }
    }

    public function getToken($code): bool
    {
        $result = (new BaseApi())->getToken($code);

        if (!$result['status'] === 'success') {
            return false;
        }

        return static::setAccessParams($result['data']);
    }

    public static function setAccessParams($params): true
    {
        Settings::setAccessParams($params);

        // employer_id для получения вакансий
        if ($employerId = static::getEmployerId()) {
            Settings::set('employer_id', $employerId);
        }

        return true;
    }

    /*
     * Получает и записывает токен при редиректе на страницу
     * */
    public static function getEmployerId()
    {
        $result = (new BaseApi())->getUserInfo();

        if (!$result['status'] === 'success') {
            return '';
        }

        return $result['data']['employer']['id'] ?: '';
    }

    public static function refreshToken(): bool
    {
        $result = (new BaseApi())->refreshToken();

        if (!$result['status'] === 'success') {
            return false;
        }

        return static::setAccessParams($result['data']);
    }

}
