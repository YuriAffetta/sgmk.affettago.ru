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
	
	$newName = "";
	$arName = explode(" ", $arItem["NAME"]);
	foreach ($arName as $key => $value) {
		if ($value == end($arName)) {
			$newName .= "<br/>" . $value;
		} else {
			$newName .= $value . " ";
		}
	}
	?>
	
	<div class="management__item management-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		<div class="management-item__content">
			<div class="management-item__name"><?= $newName ?: $arItem["NAME"]; ?></div>
			<div class="management-item__position"style="margin-bottom: 5px;"><?= $arItem["PROPERTIES"]["POST"]["VALUE"]; ?></div>
			<div class="management-item__contacts"><a
						href="tel:<?= $arItem["PROPERTIES"]["PHONE"]["VALUE"]; ?>"><?= $arItem["PROPERTIES"]["PHONE"]["VALUE"]; ?></a>
			</div>
		</div>
	</div>
<?php endforeach; ?>
