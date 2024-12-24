<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult["ITEMS"] as $key => $arItem) {
	$arResult["ITEMS"][$key]["FILE_SRC"] = CFile::GetPath($arItem["PROPERTIES"]["FILE"]["VALUE"]);
}
