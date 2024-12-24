<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arChainBody = array();
foreach ($arCHAIN as $item) {
	if (mb_strlen($item["LINK"]) < mb_strlen(SITE_DIR))
		continue;
	if ($item["LINK"] <> "")
		$arChainBody[] = '<a href="' . $item["LINK"] . '" class="search-results--item-breadcrumbs-item">' . htmlspecialcharsex($item["TITLE"]) . '</a>';
	else
		$arChainBody[] = htmlspecialcharsex($item["TITLE"]);
}

return '<a href="' . end($arCHAIN)["LINK"] . '" class="result-search__link">' . htmlspecialcharsex(end($arCHAIN)["TITLE"]) . '</a>';
