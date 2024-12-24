<?php

use Bitrix\Main\Loader;
use Mantix\HeadHunter\Authorize;
use Mantix\HeadHunter\BaseApi;
use Mantix\HeadHunter\Settings;
use Mantix\HeadHunter\Vacancies;

try {
    Loader::registerAutoloadClasses("hh.integration", [

        // HH integration
        BaseApi::class => 'lib/BaseApi.php',
        Authorize::class => 'lib/Authorize.php',
        Settings::class => 'lib/Settings.php',
        Vacancies::class => 'lib/Vacancies.php',
    ]);
} catch (\Bitrix\Main\LoaderException $e) {
}


