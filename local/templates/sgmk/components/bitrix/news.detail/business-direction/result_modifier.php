<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */

CModule::IncludeModule("iblock");

foreach ($arResult["PROPERTIES"]["FILES"]["VALUE"] as $file) {
	$arResult["FILES"][] = CFile::GetFileArray($file);
}

foreach ($arResult["PROPERTIES"]["CERTIFICATES"]["VALUE"] as $certificate) {
	$arResult["CERTIFICATES"][] = CFile::GetPath($certificate);
}

foreach ($arResult["PROPERTIES"]["TYPES_PRODUCTS"]["VALUE"] as $productId) {
	$resProduct = CIBlockElement::GetByID($productId);
	if ($arProduct = $resProduct->GetNext()) {
		$arProduct["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arProduct["PREVIEW_PICTURE"]);
		$arResult["PRODUCTS"][] = $arProduct;
	}
}

foreach ($arResult["PROPERTIES"]["AREAS_APPLICATION"]["VALUE"] as $areaId) {
	$resArea = CIBlockElement::GetByID($areaId);
	if ($arArea = $resArea->GetNext()) {
		$arArea["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arArea["PREVIEW_PICTURE"]);
		
		$dbBtnText = CIBlockElement::GetProperty(22, $areaId, ["sort" => "asc"], ["CODE" => "BTN_TEXT"]);
		if ($arBtnText = $dbBtnText->Fetch()) {
			$arArea["BTN_TEXT"] = $arBtnText["VALUE"];
		}
		$dbBtnLink = CIBlockElement::GetProperty(22, $areaId, ["sort" => "asc"], ["CODE" => "BTN_LINK"]);
		if ($arBtnLink = $dbBtnLink->Fetch()) {
			$arArea["BTN_LINK"] = $arBtnLink["VALUE"];
		}
		
		$arResult["AREAS_APPLICATION"][] = $arArea;
	}
}
