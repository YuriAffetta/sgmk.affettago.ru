<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); ?>

<section class="ecology">
	<div class='ecology__container tabs' data-tabs data-tabs-animate="800">
		<div class="ecology__top">
			<h2 class="ecology__title _title">проекты</h2>
			<div class="ecology__inner">
				<nav class="ecology__list tabs__navigation" data-tabs-titles>
					<?php foreach ($arResult['SECTIONS'] as $k => &$arSection): ?>
						<button type="button" class="ecology__link tabs__title <?= ($k == 0) ? '_tab-active' : ''; ?>"><?= $arSection["NAME"]; ?></button>
					<?php endforeach; ?>
				</nav>
			</div>
		</div>
		<div class="ecology__row tabs__content" data-tabs-body>
			<?php foreach ($arResult['SECTIONS'] as &$arSection): ?>
				<div class="ecology__column tabs__body">
					<div class="ecology__slider swiper js-slider-ecology">
						<div class="ecology__swiper swiper-wrapper">
							<?php $APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"projects",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array("", ""),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "12",
									"IBLOCK_TYPE" => "sustainability",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "Y",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "100",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => "",
									"PAGER_TITLE" => "",
									"PARENT_SECTION" => $arSection["ID"],
									"PARENT_SECTION_CODE" => $arSection["CODE"],
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array("", ""),
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
									"STRICT_SECTION_CHECK" => "N"
								)
							);?>
						</div>
						<div class="ecology__arrows swiper__arrows">
							<button type="button" class="ecology__arrow ecology__arrow--prev swiper__arrow swiper__arrow--prev" style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/01.svg")'></button>
							<button type="button" class="ecology__arrow ecology__arrow--next swiper__arrow swiper__arrow--next" style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/02.svg")'></button>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	
	</div>
</section>
