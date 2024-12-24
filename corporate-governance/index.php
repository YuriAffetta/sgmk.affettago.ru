<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корпоративное управление");
?>

<?php $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"governance",
	Array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array("", ""),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(""),
		"TOP_DEPTH" => "1",
	)
);?>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
