<?php


namespace Mantix\HeadHunter;

use Bitrix\Main\Config\Option;

class Settings
{


    public static function getClientId(): string
    {
        return self::get('client_id');
    }

    public static function get($name): string
    {
        return Option::get('hh.integration', $name);
    }

    public static function getClientSecret(): string
    {
        return self::get('client_secret');
    }

    public static function getRedirectUri(): string
    {
        return self::get('redirect_uri');
    }

    public static function getAccessToken()
    {
        return self::get('access_token');
    }

    public static function getRefreshToken()
    {
        return self::get('refresh_token');
    }

    public static function getExpiresIn()
    {
        return self::get('expires_in');
    }

    public static function getDateCreate()
    {
        return self::get('date_create');
    }

    public static function getDateExpires()
    {
        return self::get('date_expires');
    }

    public static function setAccessParams($params): void
    {
        $params['date_create'] = time();
        $params['date_expires'] = $params['date_create'] + (int)$params['expires_in'];

        foreach ($params as $name => $value) {
            self::set($name, $value);
        }
    }

    public static function getEmployerID(): string
    {
        return self::get('employer_id');
    }

    public static function set($name, $value): void
    {
        Option::set('hh.integration', $name, $value);
    }

    public static function getAccessParams(): array
    {
        return [
            'access_token' => self::get('access_token'),
            'refresh_token' => self::get('refresh_token'),
            'expires_in' => self::get('expires_in'),
            'date_create' => self::get('date_create'),
            'date_expires' => self::get('date_expires'),
            'employer_id' => self::get('employer_id'),
        ];
    }

    public static function cleanAccessParams(): void
    {
        self::set('access_token', '');
        self::set('refresh_token', '');
        self::set('expires_in', '');
        self::set('date_create', '');
        self::set('date_expires', '');
        self::set('last_auth_error', '');
        self::set('employer_id', '');
    }

}
