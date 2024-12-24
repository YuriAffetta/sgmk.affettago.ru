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
?>

<section class="search-result">
	<div class='search-result__container'>
		<div class="search-result__inner">
			<h1 class="search-result__title _title">Результаты поиска</h1>
			<form action="/search/" class="search-result__form"
			      style="--icon:url('<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/search.svg')">
				<div class="search-result__head">
					<input type="text" name="q" data-error="Ошибка" placeholder="Поиск"
					       value="<?= $arResult["REQUEST"]["QUERY"] ?>" class="input">
					<button type="reset" class="search-result__reset" title="Сбросить"></button>
					<button type="submit" class="search-result__send">Найти</button>
				</div>
				<div class="search-result__quiantity">
					Найдено: <?= $arResult["NAV_RESULT"]->NavRecordCount ?: 0; ?> совпадений
				</div>
			</form>
			<?php if ($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false): ?>
			<?php elseif ($arResult["ERROR_CODE"] != 0): ?>
				<p><?= GetMessage("SEARCH_ERROR") ?></p>
				<?php ShowError($arResult["ERROR_TEXT"]); ?>
				<p><?= GetMessage("SEARCH_CORRECT_AND_CONTINUE") ?></p>
			<?php elseif (count($arResult["SEARCH"]) > 0): ?>
				<?php foreach ($arResult["SEARCH"] as $arItem): ?>
					<div class="search-result__item result-search">
						<a href="<?= ($arItem["URL_WO_PARAMS"]) ? $arItem["URL"] : '/' . $arItem["URL"]; ?>" class="result-search__name">
							<?= $arItem["TITLE_FORMATED"]; ?>
						</a>
						<div class="result-search__content"><?= $arItem["BODY_FORMATED"]; ?></div>
						<?php if ($arItem["CHAIN_PATH"]): ?>
							<?= $arItem["CHAIN_PATH"]; ?>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			<?php else: ?>
				<?php ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND")); ?>
			<?php endif; ?>
			<?= $arResult["NAV_STRING"]; ?>
		</div>
	</div>
</section>

<script>
	const btnClearSearch = document.querySelector('.search-result__reset');
	
	btnClearSearch.addEventListener('click', (e) => {
		e.preventDefault();
		document.querySelector('.search-result__form input').value = '';
	})
</script>
