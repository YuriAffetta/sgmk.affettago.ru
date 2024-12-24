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

<section class="story js-video-trigger js-area">
	<div class='story__container'>
		<h2 class="story__title _title">история компании</h2>
		<div class="story__sliders">
			<div class="story__year swiper js-slider-year">
				<div class="story__year-swiper swiper-wrapper">
					<?php foreach ($arResult['SECTIONS'] as &$arSection): ?>
						<div class="story__year-slide swiper-slide">
							<div class="story__year-text"><?= $arSection["NAME"]; ?></div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="story__info swiper js-slider-info">
				<div class="story__info-swiper swiper-wrapper">
					<?php foreach ($arResult['SECTIONS'] as &$arSection): ?>
						<div class="story__info-slide swiper-slide">
							<div class="story__info-inner">
								<?php $APPLICATION->IncludeComponent(
									"bitrix:news.list",
									"history-company",
									array(
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
										"IBLOCK_ID" => $arParams["IBLOCK_ID"],
										"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"INCLUDE_SUBSECTIONS" => "Y",
										"MESSAGE_404" => "",
										"NEWS_COUNT" => "50",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_DESC_NUMBERING" => "N",
										"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_SHOW_ALWAYS" => "N",
										"PAGER_TEMPLATE" => "",
										"PAGER_TITLE" => "",
										"PARENT_SECTION" => $arSection['ID'],
										"PARENT_SECTION_CODE" => "",
										"PREVIEW_TRUNCATE_LEN" => "",
										"PROPERTY_CODE" => array("*"),
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
								); ?>
								<?php if ($arSection["GALLERY"]): ?>
									<div class="story__info-slider swiper js-slider-company">
										<div class="story__info-wrapper swiper-wrapper">
											<?php foreach ($arSection["GALLERY"] as $img): ?>
												<div class="story__info-gallery swiper-slide">
													<img src="<?= $img; ?>" alt="">
												</div>
											<?php endforeach; ?>
										</div>
										<div class="story__info-pagging"></div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
