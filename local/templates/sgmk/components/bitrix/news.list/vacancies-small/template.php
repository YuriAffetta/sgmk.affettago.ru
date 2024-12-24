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

<div class="work__aside-items">
	<?php foreach ($arResult["ITEMS"] as $arItem): ?>
		<?php
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
		<a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
		   class="work__aside-item item-work">
			<div class="item-work__top">
				<?php if ($arItem["PROPERTIES"]["DIRECTION"]["VALUE"]): ?>
					<div class="item-work__title"><?= $arItem["PROPERTIES"]["DIRECTION"]["VALUE"]; ?></div>
				<?php endif; ?>
				<?php if ($arItem["PROPERTIES"]["COMPANY"]["VALUE"] || $arItem["PROPERTIES"]["CITY"]["VALUE"]): ?>
					<div class="item-work__text"><?= $arItem["PROPERTIES"]["CITY"]["VALUE"]; ?><?= ($arItem["PROPERTIES"]["CITY"]["VALUE"] && $arItem["PROPERTIES"]["COMPANY"]["VALUE"]) ? ', ' . $arItem["PROPERTIES"]["COMPANY"]["VALUE"] : $arItem["PROPERTIES"]["COMPANY"]["VALUE"]; ?></div>
				<?php endif; ?>
			</div>
			<div class="item-work__inner">
				<div class="item-work__subtitle"><?= $arItem["NAME"]; ?></div>
				<?php if ($arItem["PROPERTIES"]["WAGE"]["VALUE"]): ?>
					<div class="item-work__value"><?= $arItem["PROPERTIES"]["WAGE"]["VALUE"]; ?></div>
				<?php endif; ?>
			</div>
		</a>
	<?php endforeach; ?>
</div>
