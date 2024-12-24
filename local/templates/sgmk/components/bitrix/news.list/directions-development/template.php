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

<section class="produce produce--two">
	<div class='produce__container'>
		<div class="produce__top">
			<h2 class="produce__title _title">
				<span>Направления </span>развития
			</h2>
		</div>
		<div class="produce__slider swiper js-slider-produce">
			<div class="produce__swiper swiper-wrapper">
				<?php foreach ($arResult["ITEMS"] as $arItem): ?>
					<?php
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					
					<div class="produce__column produce__slide swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<div class="produce__column-content">
							<h3 class="produce__column-title"><?= $arItem["NAME"]; ?></h3>
							<div class="produce__column-text"><?= $arItem["PREVIEW_TEXT"]; ?></div>
						</div>
						<div class="produce__column-image">
							<picture>
								<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="">
							</picture>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
