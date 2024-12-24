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

<ul class="area__column-list">
	<?php foreach ($arResult["ITEMS"] as $arItem): ?>
		<?php
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
		<li id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="area__column-link" style='--icon:url("/local/templates/sgmk/assets/static/img/icons/03.svg")'>
				<?= $arItem["NAME"]; ?>
			</a>
		</li>
	<?php endforeach; ?>
</ul>
