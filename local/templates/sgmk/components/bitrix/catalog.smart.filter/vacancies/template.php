<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true); ?>

<aside class="catalog__aside aside">
	<div class="aside__filter" style='--icon:url("/local/templates/sgmk/assets/static/img/icons/08.svg"); --active:url("/local/templates/sgmk/assets/static/img/icons/09.svg")'>Фильтры</div>
	<form name="<?= $arResult["FILTER_NAME"]."_form"; ?>" action="<?= $arResult["FORM_ACTION"]; ?>" method="get" class="smartfilter aside__form form">
		<div class="form__inner">
			<div class="form__group form__group--two">
				<?php foreach($arResult["HIDDEN"] as $arItem): ?>
					<input type="hidden" name="<?= $arItem["CONTROL_NAME"]; ?>" id="<?= $arItem["CONTROL_ID"]; ?>" value="<?= $arItem["HTML_VALUE"]; ?>" />
				<?php endforeach; ?>
				
				<?php foreach ($arResult["ITEMS"] as $key => $arItem): ?>
					<?php
					if (empty($arItem["VALUES"]) || isset($arItem["PRICE"])) continue;
					if ($arItem["DISPLAY_TYPE"] === SectionPropertyTable::NUMBERS_WITH_SLIDER && ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)) continue;
					?>
				
					<fieldset class="form__fieldset">
						<div class="form__fieldset-title"><?= $arItem["NAME"]; ?></div>
						<div class="form__fieldset-checkboxes form__fieldset-checkboxes--two">
							<?php foreach ($arItem["VALUES"] as $val => $ar): ?>
								<div class="form__fieldset-checkbox checkbox">
									<input id="<?= $ar["CONTROL_ID"]; ?>" data-error="Ошибка" class="checkbox__input" type="checkbox" value="<?= $ar["HTML_VALUE"]; ?>" name="<?= $ar["CONTROL_NAME"]; ?>" <?= $ar["CHECKED"]? 'checked="checked"': ''; ?> onclick="smartFilter.click(this)">
									<label data-role="label_<?= $ar["CONTROL_ID"]; ?>" for="<?= $ar["CONTROL_ID"]; ?>" class="checkbox__label">
										<span class="checkbox__text"><?= $ar["VALUE"]; ?></span>
									</label>
								</div>
							<?php endforeach; ?>
						</div>
						<?php if (count($arItem["VALUES"]) > 13): ?>
							<a href="javascript:void(0);" class="form__fieldset-more"><span>Посмотреть все</span><span>Свернуть</span></a>
						<?php endif; ?>
					</fieldset>
				<?php endforeach; ?>
			</div>
			<button type="button" class="btn btn-link d-none d-md-block" name="del_filter" onclick="BX.showWait(document.querySelector('.catalog__container')); window.location.href = '/vacancies/';">Сбросить</button>
			<button type="submit" id="set_filter" class="form__button" name="set_filter">Применить фильтры</button>
			<button type="button" class="form__button" name="del_filter" onclick="BX.showWait(document.querySelector('.catalog__container')); window.location.href = '/vacancies/';">Сбросить</button>
		</div>
	</form>
</aside>

<script type="text/javascript">
	var smartFilter = new JCSmartFilter('<?= CUtil::JSEscape($arResult["FORM_ACTION"]); ?>', '<?= CUtil::JSEscape($arParams["FILTER_VIEW_MODE"]); ?>', <?= CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"]); ?>);
	
	document.querySelectorAll(".form__fieldset-more").forEach((element) => {
		element.addEventListener("click", () => {
			console.log(element);
			console.log(element.previousElementSibling);
			element.classList.toggle("_active");
			let previousElement = element.previousElementSibling;
			if (previousElement) {
				previousElement.classList.toggle("_active");
			}
		});
	});
	
	if (window.matchMedia("(max-width: 992px)").matches) {
		const filter = document.querySelector(".aside__filter");
		const form = document.querySelector(".aside__form");
		
		if (filter && form) {
			form.style.height = "0";
			form.style.overflow = "hidden";
			form.style.transition = "height 0.3s ease";
			
			filter.addEventListener("click", () => {
				filter.classList.toggle("_active");
				form.classList.toggle("_active");
				if (filter.classList.contains("_active")) {
					form.style.height = form.scrollHeight + "px";
					setTimeout(() => {
						form.style.height = "auto";
					}, 350);
				} else {
					form.style.height = form.scrollHeight + "px";
					form.style.height = "0";
				}
			});
		}
	}
</script>
