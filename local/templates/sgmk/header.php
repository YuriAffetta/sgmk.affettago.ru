<?php
/**
 * @global $APPLICATION ;
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset as Asset;

define('IS_HOME_PAGE', $APPLICATION->GetCurPage() === '/');
define('IS_SHOW_BANNER', ($APPLICATION->GetProperty('show-banner') == 'Y') ? true : false);?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php $APPLICATION->ShowHead(); ?>
	<title><?php $APPLICATION->ShowTitle() ?></title>
	<link type="image/x-icon" rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH; ?>/favicon.ico">
	<?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/static/css/style.min.css'); ?>
	<?php /* <script src="https://www.google.com/recaptcha/api.js?render=6LdfdponAAAAAHC3yjV-R4Pk6O99nyBK8QDo_-Fr"></script> */ ?>
	
	<script>
		var baseUrl = "./assets/static/js/";
	</script>
</head>
<body>
	<div id="panel">
		<?php $APPLICATION->ShowPanel(); ?>
	</div>
	<div class="wrapper">
		<header class="header <?php if (IS_SHOW_BANNER): ?>header--transparent<?php endif; ?>" data-lp>
			<div class="header__container">
				<a href="/" aria-label="Логотип" class="header__logo">
					<img src="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/logo.svg" alt="СГМК">
				</a>
				<button type="button" class="icon-menu" aria-expanded="false" aria-label="Меню"><span></span></button>
				
				<?php $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"header",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "inner",
						"DELAY" => "N",
						"MAX_LEVEL" => "2",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "main",
						"USE_EXT" => "N"
					)
				); ?>
				<button type="button" aria-expanded="false" aria-controls="search" class="header__search js-open-search" aria-label="Поиск" style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/search.svg"); --close:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/close.svg")'></button>
				<?php /*
				<div class="header__lang">
					<select name="form[]">
						<option data-href="/en/">EN</option>
						<option selected data-href="/">РУ</option>
					</select>
				</div>
                */ ?>
			</div>
			<?php $APPLICATION->IncludeComponent(
				"sgmk:search.title",
				"header-search",
				array(
					"CATEGORY_0" => array("no"),
					"CATEGORY_0_TITLE" => "",
					"CHECK_DATES" => "N",
					"CONTAINER_ID" => "title-search-result",
					"INPUT_ID" => "title-search-input",
					"NUM_CATEGORIES" => "1",
					"ORDER" => "date",
					"PAGE" => "#SITE_DIR#search/",
					"SHOW_INPUT" => "Y",
					"SHOW_OTHERS" => "N",
					"TOP_COUNT" => "3",
					"USE_LANGUAGE_GUESS" => "Y"
				)
			); ?>
		</header>
		<main class="page js-gsap <?php if (IS_SHOW_BANNER): ?>page--no-indent<?php endif; ?>">
			<?php if (!IS_SHOW_BANNER): ?>
				<?php $APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"sgmk",
					array(
						"PATH" => "",
						"SITE_ID" => "s1",
						"START_FROM" => "0"
					)
				); ?>
			<?php endif; ?>
