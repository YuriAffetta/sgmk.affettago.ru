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

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
	<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<?php if ($arItem["PREVIEW_TEXT"]): ?>
		<div class="principle__column-text">
			<p><?= $arItem["PREVIEW_TEXT"]; ?></p>
		</div>
	<?php endif; ?>
	<div data-spollers class="principle__spollers spollers" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		<details class="spollers__item">
			<summary class="spollers__title"><?= $arItem["NAME"]; ?></summary>
			<div class="spollers__body"><?= $arItem["DETAIL_TEXT"]; ?></div>
		</details>
	</div>
<?php endforeach; ?>
