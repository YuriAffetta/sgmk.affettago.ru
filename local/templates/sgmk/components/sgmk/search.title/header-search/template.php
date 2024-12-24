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

$INPUT_ID = trim($arParams["~INPUT_ID"]);
if ($INPUT_ID == '')
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if ($CONTAINER_ID == '')
	$CONTAINER_ID = "title-search-result";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if ($arParams["SHOW_INPUT"] !== "N"):?>
	<div class="header__container header-search js-search" id="search">
		<form action="<?= $arResult["FORM_ACTION"] ?>" class="header-search__form"
		      style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/search.svg")'>
			<input id="<?= $INPUT_ID; ?>" class="header-search__input" type="text" name="q"
			       value="<?= $_REQUEST['q'] ?>" placeholder="Например, направления деятельности" size="40"
			       maxlength="50"
			       autocomplete="off"/>
			<button type="submit" class="header-search__btn">Найти</button>
		</form>
		<div id="<?= $CONTAINER_ID ?>" class="header-search__result"></div>
	</div>
<?php endif ?>

<script>
	BX.ready(function () {
		new JCTitleSearch({
			'AJAX_PAGE': '<?= CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
			'CONTAINER_ID': '<?= $CONTAINER_ID?>',
			'INPUT_ID': '<?= $INPUT_ID?>',
			'MIN_QUERY_LEN': 2
		});
	});
</script>
