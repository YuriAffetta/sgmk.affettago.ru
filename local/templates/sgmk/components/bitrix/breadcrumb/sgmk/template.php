<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if (!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css)) {
	$strReturn .= '<link href="' . CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css") . '" type="text/css" rel="stylesheet" />' . "\n";
}

$strReturn .= '<div class="breadcrumb breadcrumb--main" style="--linkColor: #BBBBBF; --activeColor: #535353"><ul class="breadcrumb__list breadcrumb__container">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0 ? '<i class="fa fa-angle-right"></i>' : '');
	
	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '
			<li class="breadcrumb__item">
				<span>
					<a href="' . $arResult[$index]["LINK"] . '"><span>' . $title . '</span></a>
				</span>
			</li>';
	} else {
		$arTitle = explode(" ", $title);
		if (count($arTitle) > 2) {
			$title = $arTitle[0] . " " . $arTitle[1] . " ...";
		}
		$strReturn .= '
			<li class="breadcrumb__item breadcrumb__item--active">
				<span><span>' . $title . '</span></span>
			</li>';
	}
}

$strReturn .= '</ul></div>';

return $strReturn;
