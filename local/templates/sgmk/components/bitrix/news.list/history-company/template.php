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

<div class="story__info-content">
	<div class="story__info-row">
		<?php foreach ($arResult["ITEMS"] as $arItem): ?>
			<?php
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			
			<div class="story__info-column" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class="story__info-title"><?= $arItem["NAME"]; ?></div>
				<div class="story__info-text">
					<p><?= $arItem["PREVIEW_TEXT"]; ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
