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

<div class="catalog__content">
	<div class="catalog__row">
		<?php foreach ($arResult["ITEMS"] as $arItem): ?>
			<?php
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="catalog__column" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class="catalog__column-info info-catalog">
					<div class="info-catalog__top">
						<div class="info-catalog__items">
							<?php if ($arItem["PROPERTIES"]["DIRECTION"]["VALUE"]): ?>
								<div class="info-catalog__item">
									<div class="info-catalog__title"><?= $arItem["PROPERTIES"]["DIRECTION"]["VALUE"]; ?></div>
								</div>
							<?php endif; ?>
							<?php if ($arItem["PROPERTIES"]["COMPANY"]["VALUE"]): ?>
								<div class="info-catalog__item">
									<div class="info-catalog__text"><?= $arItem["PROPERTIES"]["COMPANY"]["VALUE"]; ?></div>
								</div>
							<?php endif; ?>
						</div>
						<?php if ($arItem["PROPERTIES"]["CITY"]["VALUE"]): ?>
							<div class="info-catalog__city"><?= $arItem["PROPERTIES"]["CITY"]["VALUE"]; ?></div>
						<?php endif; ?>
					</div>
					<div class="info-catalog__inner">
						<div class="info-catalog__subtitle"><?= $arItem["NAME"]; ?></div>
						<?php if ($arItem["PROPERTIES"]["WAGE"]["VALUE"]): ?>
							<div class="info-catalog__value"><?= $arItem["PROPERTIES"]["WAGE"]["VALUE"]; ?></div>
						<?php endif; ?>
					</div>
					<div class="info-catalog__bottom bottom-info">
						<?php if ($arItem["PROPERTIES"]["WORK_EXPERIENCE"]["VALUE"]): ?>
							<div class="bottom-info__text">
								Опыт работы: <?= $arItem["PROPERTIES"]["WORK_EXPERIENCE"]["VALUE"]; ?>
							</div>
						<?php endif; ?>
						<a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="bottom-info__link">Подробнее</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	
	<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
		<?= $arResult["NAV_STRING"]; ?>
	<?php endif; ?>
</div>
