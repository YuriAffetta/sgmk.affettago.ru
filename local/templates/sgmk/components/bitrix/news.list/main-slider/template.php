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

<section class="hero swiper js-hero js-first">
	<div class="hero__swiper swiper-wrapper">
		<?php foreach ($arResult["ITEMS"] as $k => $arItem): ?>
			<?php
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			
			<div class="hero__slide swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<button type="button" aria-label="Следующий слайд" class="hero__slide-next"></button>
				<picture class="hero__image">
					<?php if ($arItem["DETAIL_PICTURE"]["SRC"]): ?>
						<source media="(max-width: 991px)" srcset="<?= $arItem["DETAIL_PICTURE"]["SRC"]; ?>">
					<?php endif; ?>
					<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="" style='width: 100%;'>
				</picture>
				<?php if ($arItem["PROPERTIES"]["IMG_PARALLAX"]["VALUE"]): ?>
					<picture class="hero__paralax">
						<img src="<?= CFile::GetPath($arItem["PROPERTIES"]["IMG_PARALLAX"]["VALUE"]); ?>" alt="">
					</picture>
				<?php endif; ?>
				<div class="hero__container">
					<?php if ($arItem["PROPERTIES"]["LOCATION_DESC_BLOCK"]["VALUE_XML_ID"] == "LEFT"): ?>
						<div class="hero__left">
							<h2 class="hero__title">
								<span><?= $arItem["NAME"]; ?></span>
							</h2>
							<div class="hero__info"><?= $arItem["PREVIEW_TEXT"]; ?></div>
							<a href="<?= $arItem["PROPERTIES"]["BTN_LINK"]["VALUE"]; ?>" class="btn btn--whte hero__btn"><?= $arItem["PROPERTIES"]["BTN_TEXT"]["VALUE"]; ?></a>
						</div>
					<?php else: ?>
						<div class="hero__left">
							<h1 class="hero__title"><?= $arItem["NAME"]; ?></h1>
						</div>
						<div class="hero__right">
							<div class="hero__info"><?= $arItem["~PREVIEW_TEXT"]; ?></div>
							<a href="<?= $arItem["PROPERTIES"]["BTN_LINK"]["VALUE"]; ?>" class="btn btn--whte hero__btn"><?= $arItem["PROPERTIES"]["BTN_TEXT"]["VALUE"]; ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
			
			<div class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" style="display: none;">
				<h1 class="hero__title">
					<span>инновации </span><br>и развитие в горно– <br>металлургической <br>отрасли
				</h1>
				
				<div>Цвет первой строки (для заголовка):</div>
				<div><?= $arItem["PROPERTIES"]["FIRST_LINE_COLOR"]["VALUE"]; ?></div>
				
				<div>Цвет остальных строк (для заголовка):</div>
				<div><?= $arItem["PROPERTIES"]["OTHER_LINE_COLOR"]["VALUE"]; ?></div>
				
				<div>Расположение описания и кнопки:</div>
				<div><?= $arItem["PROPERTIES"]["LOCATION_DESC_BLOCK"]["VALUE_XML_ID"]; ?></div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="hero__container hero__pag-container">
		<div class="hero__pag"></div>
	</div>
</section>
