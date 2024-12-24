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

<section class="reliability js-video-trigger js-area">
	<div class='reliability__container'>
		<h2 class="reliability__title _title"><span>Сотрудничаем</span> с надёжными <br> компаниями</h2>
		<div class="reliability__inner">
			<div class="reliability__slider swiper js-slider-reliability">
				<div class="reliability__swiper swiper-wrapper">
					<?php foreach ($arResult["ITEMS"] as $arItem): ?>
						<?php
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						
						<a href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?: 'javascript:void(0);' ?>" class="reliability__slide swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" target="_blank">
							<div class="reliability__slide-img">
								<picture>
									<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="">
								</picture>
							</div>
							<div class="reliability__slide-title"><?= $arItem["NAME"]; ?></div>
							<div class="reliability__slide-text"><?= $arItem["~PREVIEW_TEXT"]; ?></div>
						</a>
					<?php endforeach; ?>
				</div>
				<div class="reliability__arrows swiper__arrows">
					<button type="button" class="reliability__arrow reliability__arrow--prev swiper__arrow swiper__arrow--prev" style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/01.svg")'></button>
					<button type="button" class="reliability__arrow reliability__arrow--next swiper__arrow swiper__arrow--next" style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/02.svg")'></button>
				</div>
			</div>
		</div>
	</div>
</section>
