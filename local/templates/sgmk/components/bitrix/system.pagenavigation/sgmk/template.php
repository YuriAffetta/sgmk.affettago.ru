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
$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
	
}

if (strpos($arResult["NavQueryString"], 'CODE') === false && strpos($arResult["NavQueryString"], 'element_code') === false) {
	$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
	$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
} ?>

<?php if ($arResult["NavPageCount"] > 1): ?>
	<nav class="catalog__pagging pagging">
		<?php $btnDisabled = ($arResult["NavPageNomer"] == 1) ? 'disabled' : ''; ?>
		<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
		   class="pagging__arrow pagging__arrow_<?= $btnDisabled; ?>"
		   style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/05.svg")'></a>
		
		<ul class="pagging__list">
			<li>
				<a href="<?= $arResult["sUrlPath"]; ?><?= $strNavQueryStringFull; ?>"
				   class="pagging__item <?= $arResult["NavPageNomer"] == 1 ? "_active" : "" ?>">1</a>
			</li>
			<?php if ($arResult["NavPageNomer"] > 3): ?>
				<li>
					<a href="javascript:void(0);" class="pagging__item pagging__item__dots">...</a>
				</li>
			<?php endif; ?>
			<?php if ($arResult["NavPageNomer"] - 1 > 1): ?>
				<li>
					<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
					   class="pagging__item"><?= $arResult["NavPageNomer"] - 1 ?></a>
				</li>
			<?php endif; ?>
			<?php if ($arResult["NavPageNomer"] > 1 && $arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
				<li>
					<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"]) ?>"
					   class="pagging__item _active"><?= $arResult["NavPageNomer"] ?></a>
				</li>
			<?php endif; ?>
			<?php if ($arResult["NavPageNomer"] + 1 < $arResult["NavPageCount"]): ?>
				<li>
					<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
					   class="pagging__item"><?= $arResult["NavPageNomer"] + 1 ?></a>
				</li>
			<?php endif; ?>
			<?php if ($arResult["NavPageNomer"] < $arResult["NavPageCount"] - 2): ?>
				<li>
					<a href="javascript:void(0);" class="pagging__item pagging__item__dots">...</a>
				</li>
			<?php endif; ?>
			<?php if ($arResult["NavPageCount"] > 1): ?>
				<li>
					<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageCount"]) ?>"
					   class="pagging__item <?= $arResult["NavPageNomer"] == $arResult["NavPageCount"] ? "_active" : "" ?>"><?= $arResult["NavPageCount"] ?></a>
				</li>
			<?php endif; ?>
		</ul>
		
		<?php $btnDisabled = ($arResult["NavPageNomer"] >= $arResult["NavPageCount"]) ? 'disabled' : ''; ?>
		<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
		   class="pagging__arrow pagging__arrow_<?= $btnDisabled; ?>"
		   style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/06.svg")'></a>
	</nav>
<?php endif ?>
