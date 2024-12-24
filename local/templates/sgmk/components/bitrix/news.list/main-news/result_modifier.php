<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arResult */

foreach ($arResult["ITEMS"] as $key => $arItem) {
	$arResult["ITEMS"][$key]["PREVIEW_PICTURE_RESIZE"] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], ['width' => 1311, 'height' => 609], BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false, false, false, 100);
}
