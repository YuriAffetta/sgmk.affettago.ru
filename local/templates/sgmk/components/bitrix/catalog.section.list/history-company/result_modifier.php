<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SECTIONS'] as $key => &$arSection) {
	foreach ($arSection['UF_GALLERY'] as $img) {
		$arResult['SECTIONS'][$key]['GALLERY'][] = CFile::GetPath($img);
	}
}
