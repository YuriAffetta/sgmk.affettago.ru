<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?>

<section class="catalog catalog--two">
	<div class='catalog__container'>
		<div class="catalog__top">
			<h1 class="catalog__title _title"><?php $APPLICATION->ShowTitle(false); ?></h1>
		</div>
		<div class="catalog__inner">
			<?php $APPLICATION->IncludeComponent(
				"bitrix:catalog.smart.filter",
				"vacancies",
				Array(
					"INSTANT_RELOAD" => "Y",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CONVERT_CURRENCY" => "N",
					"DISPLAY_ELEMENT_COUNT" => "Y",
					"FILTER_NAME" => "arrFilterVacancies",
					"FILTER_VIEW_MODE" => "vertical",
					"HIDE_NOT_AVAILABLE" => "N",
					"IBLOCK_ID" => "9",
					"IBLOCK_TYPE" => "content",
					"PAGER_PARAMS_NAME" => "arrPager",
					"POPUP_POSITION" => "left",
					"PREFILTER_NAME" => "smartPreFilterVacancies",
					"PRICE_CODE" => array(),
					"SAVE_IN_SESSION" => "N",
					"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
					"SECTION_CODE_PATH" => "",
					"SECTION_DESCRIPTION" => "-",
					"SECTION_ID" => $_REQUEST["SECTION_ID"],
					"SECTION_TITLE" => "-",
					"SEF_MODE" => "Y",
					"SEF_RULE" => "",
					"SMART_FILTER_PATH" => "",
					"TEMPLATE_THEME" => "blue",
					"XML_EXPORT" => "N"
				)
			);?>
			
			<?php $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"vacancies", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F, Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilterVacancies",
		"INSTANT_RELOAD" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "sgmk",
		"PAGER_TITLE" => "Вакансии",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "*",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "vacancies",
		"FILE_404" => ""
	),
	false
); ?>
		</div>
		<br/><br/><br/>
		<div><a href="https://hh.ru/employer/2658429" class="footer__title">Вакансии СГМК на сайте hh.ru</a></div>
	</div>
</section>

<section class="connection">
	<div class='connection__container'>
		<div class="connection__content">
			<div class="connection__title">Есть вопросы по вакансиям?</div>
			<div class="connection__text">
				Свяжитесь с нашим центром подбора персонала <br> для уточнения деталей
			</div>
			<ul class="connection__list">
				<li><a href="tel:+79095172222" class="connection__link">+7 909 517 22 22</a></li>
				<li><a href="mailto:"rabota@sgmk-group.ru" class="connection__link">rabota@sgmk-group.ru</a></li>
			</ul>
		</div>
	</div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>