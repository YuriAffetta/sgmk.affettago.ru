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

<section class="vacancy-detail">
	<div class='vacancy-detail__container'>
		<div class="vacancy-detail__head">
			<h1 class="vacancy-detail__title _title"><?= $arResult["NAME"]; ?></h1>
			<a href="<?= SITE_TEMPLATE_PATH; ?>/blocks/popups/popup-callback02.php" class="vacancy-detail__btn btn"
			   data-popup="#callback-modal02">Откликнуться на вакансию</a>
		</div>
		<div class="vacancy-detail__tags">
			<?php if ($arResult["PROPERTIES"]["DIRECTION"]["VALUE"]): ?>
				<div class="vacancy-detail__tags-active"><?= $arResult["PROPERTIES"]["DIRECTION"]["VALUE"]; ?></div>
			<?php endif; ?>
			<?php if ($arResult["PROPERTIES"]["COMPANY"]["VALUE"]): ?>
				<div class="vacancy-detail__tags-item"><?= $arResult["PROPERTIES"]["COMPANY"]["VALUE"]; ?></div>
			<?php endif; ?>
			<?php if ($arResult["PROPERTIES"]["CITY"]["VALUE"]): ?>
				<div class="vacancy-detail__tags-item"><?= $arResult["PROPERTIES"]["CITY"]["VALUE"]; ?></div>
			<?php endif; ?>
		</div>
		<?php if ($arResult["PROPERTIES"]["WAGE"]["VALUE"]): ?>
			<div class="vacancy-detail__rate"><?= $arResult["PROPERTIES"]["WAGE"]["VALUE"]; ?></div>
		<?php endif; ?>
		<?php if ($arResult["PROPERTIES"]["WORK_EXPERIENCE"]["VALUE"]): ?>
			<div class="vacancy-detail__experience">Опыт работы: <?= $arResult["PROPERTIES"]["WORK_EXPERIENCE"]["VALUE"]; ?></div>
		<?php endif; ?>
		<?php if ($arResult["PREVIEW_TEXT"] || $arResult["PROPERTIES"]["RESPONSIBILITIES"]["VALUE"] || $arResult["PROPERTIES"]["REQUIREMENTS"]["VALUE"] || $arResult["PROPERTIES"]["CONDITIONS"]["VALUE"]): ?>
			<article class="vacancy-detail__content">
				<?php if ($arResult["PREVIEW_TEXT"]): ?>
					<div class="vacancy-detail__desc"><?= $arResult["~PREVIEW_TEXT"]; ?></div>
				<?php endif; ?>
				<?php if ($arResult["PROPERTIES"]["RESPONSIBILITIES"]["VALUE"]): ?>
					<h2>Обязанности</h2>
					<ul>
						<?php foreach ($arResult["PROPERTIES"]["RESPONSIBILITIES"]["VALUE"] as $value): ?>
							<li><?= $value; ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<?php if ($arResult["PROPERTIES"]["REQUIREMENTS"]["VALUE"]): ?>
					<h2>Требования</h2>
					<ul>
						<?php foreach ($arResult["PROPERTIES"]["REQUIREMENTS"]["VALUE"] as $value): ?>
							<li><?= $value; ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<?php if ($arResult["PROPERTIES"]["CONDITIONS"]["VALUE"]): ?>
					<h2>Условия</h2>
					<ul>
						<?php foreach ($arResult["PROPERTIES"]["CONDITIONS"]["VALUE"] as $value): ?>
							<li><?= $value; ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</article>
		<?php endif; ?>
		<a href="<?= SITE_TEMPLATE_PATH; ?>/blocks/popups/popup-callback02.php" class="btn vacancy-detail__respond"
		   data-popup="#callback-modal02">Откликнуться на вакансию</a>
	</div>
</section>
