<?
// подключение файла обработки адресов urlrewrite.php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

// установка HTTP статуса 404
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
// скрывает боковую панель на странице
define("HIDE_SIDEBAR", true);

// подключение header.php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

// установка заголовка страницы
$APPLICATION->SetTitle("Страница не найдена");?>
<style>
	.hero__title {
text-align: center; 
font-size: 200px;
	}
</style>
<! -- начало содержимого страницы 404.php -->
<div class="404__title">
	<h1 class="hero__title">404</h1>
</div>
<div class="404__text">
	<p class="404__t" style="text-align: center; font-size: 48px;">Страница не существует</p>
</div>
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.map",
            ".default",
            array(
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "SET_TITLE" => "N",
                "LEVEL" => "3",
                "COL_NUM" => "2",
                "SHOW_DESCRIPTION" => "Y",
                "COMPONENT_TEMPLATE" => ".default"
            ),
            false
        );?>
    </div>
<! -- окончание содержимого страницы 404.php -->

<! --  подключение файла footer.php -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>