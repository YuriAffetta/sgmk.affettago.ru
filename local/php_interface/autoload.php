<?php

use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;
use Sgmk\Api\Base;
use Sgmk\Api\Buy;
use Sgmk\Api\Estate;
use Sgmk\Api\Vacancy;
use Sgmk\Api\Cooperation;
use Sgmk\Utils\ReCaptchaFilter;

require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/lib/ReCaptcha/src/autoload.php';

try {
	Loader::registerAutoLoadClasses(null, [
		/* Utils */
		ReCaptchaFilter::class => '/local/php_interface/lib/Sgmk/Utils/ReCaptchaFilter.php',
		
		/* API */
		Base::class => '/local/php_interface/lib/Sgmk/Api/Base.php',
		Buy::class => '/local/php_interface/lib/Sgmk/Api/Buy.php',
		Estate::class => '/local/php_interface/lib/Sgmk/Api/Estate.php',
		Vacancy::class => '/local/php_interface/lib/Sgmk/Api/Vacancy.php',
		Cooperation::class => '/local/php_interface/lib/Sgmk/Api/Cooperation.php',
	]);
} catch (LoaderException $e) {
}
