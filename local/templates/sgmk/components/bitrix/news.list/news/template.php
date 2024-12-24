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

<section class="today today--two">
	<div class='today__container'>
		<h2 class="today__title _title"><?php $APPLICATION->ShowTitle(false); ?></h2>
		<div class="today__inner load_more-container">
			<div class="today__row load_more-list">
				<?php foreach ($arResult["ITEMS"] as $arItem): ?>
					<?php
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					
					<a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="today__slide load_more-item"
					   id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<?php if ($arItem["PREVIEW_PICTURE_RESIZE"]): ?>
							<div class="today__slide-img">
								<img src="<?= $arItem["PREVIEW_PICTURE_RESIZE"]["src"]; ?>" alt="">
							</div>
						<?php endif; ?>
						<time class="today__slide-date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></time>
						<div class="today__slide-text"><?= $arItem["NAME"]; ?></div>
					</a>
				<?php endforeach; ?>
			</div>
			<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
				<?= $arResult["NAV_STRING"]; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
