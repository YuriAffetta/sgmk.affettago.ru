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
<?php //if ($arResult["TITLE_ON_BANNER"]): ?>
<section class="home js-first">
	<div class='home__container'>
		<div class="home__inner">
			<div class="home__breadcrumb breadcrumb" style='--linkColor: #fff; --activeColor: #fff'>
				<?php $APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"sgmk-inner",
					array(
						"PATH" => "",
						"SITE_ID" => "s1",
						"START_FROM" => "0"
					)
				); ?>
			</div>
			<?/*= $arResult["PROPERTIES"]["TITLE_ON_BANNER"]["VALUE"]; */?>
			<h1 class="home__title _title"><?= $arResult["PROPERTIES"]["TITLE_ON_BANNER"]["~VALUE"]["TEXT"]; ?></h1>
		</div>
		<div class="home__img">
			<img src="<?= ($arResult['PREVIEW_PICTURE']['SRC']) ?: SITE_TEMPLATE_PATH.'/assets/static/img/business-directions-banner.jpeg'; ?>" alt="<?= $arResult["NAME"]; ?>">
		</div>
	</div>
</section>

<section class="activity js-area">
	<div class='activity__container'>
		<?= $arResult['PREVIEW_TEXT']; ?>
		<?php /*
		<h2 class="activity__title _title">
			Деятельность
			<span>экомет</span>
		</h2>
		<div class="activity__inner">
			<div class="activity__content">
				<div class="activity__text">
					Завод оснащён современным оборудованием и выпускает только качественные сплавы, отвечающие
					международным стандартам качества.
				</div>
				<div class="activity__items">
					<div class="activity__item">
						<div class="activity__item-top">
							12 000 <small>тонн</small>
						</div>
						<div class="activity__item-text">
							Объем производственной мощности
						</div>
					</div>
					
					<div class="activity__item">
						<div class="activity__item-top">
							>9 000 <small>тонн</small>
						</div>
						<div class="activity__item-text">
							Объем переработанного алюминиевого лома
						</div>
					</div>
					
					<div class="activity__item">
						<div class="activity__item-top">
							>6 000 <small>тонн</small>
						</div>
						<div class="activity__item-text">
							Объём отгрузки готовой продукции
						</div>
					</div>
				</div>
			</div>
			<div class="activity__img">
				<img src="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/activity/01.webp" alt="">
			</div>
		</div>
		*/ ?>
	</div>
</section>

<?php if ($arResult["AREAS_APPLICATION"]): ?>
	<section class="produce produce--two js-produce">
		<div class='produce__container'>
			<div class="produce__top">
				<h2 class="produce__title _title js-produce-head">
					сферы <span>применения</span>
				</h2>
			</div>
			<div class="produce__slider swiper js-slider-produce ">
				<div class="produce__swiper swiper-wrapper">
					<?php foreach ($arResult["AREAS_APPLICATION"] as $area): ?>
						<div class="produce__column produce__slide swiper-slide js-produce-column">
							<div class="produce__column-content">
								<h3 class="produce__column-title"><?= $area["NAME"]; ?></h3>
								<?php if ($area["PREVIEW_TEXT"]): ?>
									<div class="produce__column-text"><?= $area["PREVIEW_TEXT"]; ?></div>
								<?php endif; ?>
								<?php if ($area["BTN_TEXT"] && $area["BTN_LINK"]): ?>
									<a href="<?= $area["BTN_LINK"]; ?>" class="produce__column-link btn"><?= $area["BTN_TEXT"]; ?></a>
								<?php endif; ?>
							</div>
							<?php if ($area["PREVIEW_PICTURE_SRC"]): ?>
								<div class="produce__column-image">
									<img src="<?= $area["PREVIEW_PICTURE_SRC"]; ?>" alt="<?= $area["NAME"]; ?>">
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ($arResult["PRODUCTS"]): ?>
	<section class="prospects">
		<div class='prospects__container'>
			<div class="prospects__top">
				<h2 class="prospects__title _title">виды продукции</h2>
				<a href="/catalog/" class="prospects__link btn" data-da=".prospects__container, 767, last">Перейти в
					каталог продукции</a>
			</div>
			<div class="prospects__row">
				<?php foreach ($arResult["PRODUCTS"] as $product): ?>
					<div class="prospects__column">
						<div class="prospects__column-img">
							<img src="<?= $product["PREVIEW_PICTURE_SRC"]; ?>" alt="<?= $product["NAME"]; ?>">
						</div>
						<div class="prospects__column-title"><?= $product["NAME"]; ?></div>
						<a class="prospects__column-link" href="/local/templates/sgmk/blocks/popups/popup-callback.html" data-popup="#callback-modal">Заказать</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<section class="supply js-area">
	<div class='supply__container'>
		<h2 class="supply__title _title">
			поставляем продукцию
		</h2>
		<div class="supply__row" style="text-align: center;">
<?php if (!empty($arResult["PROPERTIES"]["EXPORT_1"]["VALUE"])): ?>
			<div class="supply__column">
				<div class="supply__column-title"><?= $arResult["PROPERTIES"]["EXPORT_1"]["VALUE"]; ?></div>
				<!-- <ul class="supply__column-list">
					<li><a href="javascript:void(0);" class="supply__column-link">масло</a></li>
				</ul> -->
			</div>
<?php endif; ?>
<?php if (!empty($arResult["PROPERTIES"]["EXPORT_2"]["VALUE"])): ?>
			<div class="supply__column">
				<div class="supply__column-title"><?= $arResult["PROPERTIES"]["EXPORT_2"]["VALUE"]; ?></div>
				<!--<ul class="supply__column-list">
					<li><a href="javascript:void(0);" class="supply__column-link">масло</a></li>
					<li><a href="javascript:void(0);" class="supply__column-link">пшено</a></li>
					<li><a href="javascript:void(0);" class="supply__column-link">рыба</a></li>
				</ul> -->
			</div>
<?php endif; ?>
<?php if (!empty($arResult["PROPERTIES"]["EXPORT_3"]["VALUE"])): ?>
			<div class="supply__column supply__column--two">
				<div class="supply__column-title"><?= $arResult["PROPERTIES"]["EXPORT_3"]["VALUE"]; ?></div>
				<!-- <ul class="supply__column-list">
					<li><a href="javascript:void(0);" class="supply__column-link">пшено</a></li>
					<li><a href="javascript:void(0);" class="supply__column-link">ферросцилий</a></li>
					<li><a href="javascript:void(0);" class="supply__column-link">рыба</a></li>
					<li><a href="javascript:void(0);" class="supply__column-link">масло</a></li>
					<li><a href="javascript:void(0);" class="supply__column-link">пшено</a></li>
				</ul> -->
			</div>
<?php endif; ?>
<?php if (!empty($arResult["PROPERTIES"]["EXPORT_4"]["VALUE"])): ?>
			<div class="supply__column supply__column--two">
				<div class="supply__column-title"><?= $arResult["PROPERTIES"]["EXPORT_4"]["VALUE"]; ?></div>
				<!--<ul class="supply__column-list">
					<li><a href="javascript:void(0);" class="supply__column-link">масло</a></li>
				</ul> -->
			</div>
<?php endif; ?>
<?php if (!empty($arResult["PROPERTIES"]["EXPORT_5"]["VALUE"])): ?>
			<div class="supply__column">
				<div class="supply__column-title"><?= $arResult["PROPERTIES"]["EXPORT_5"]["VALUE"]; ?></div>
				<!--<ul class="supply__column-list">
					<li><a href="javascript:void(0);" class="supply__column-link">масло</a></li>
					<li><a href="javascript:void(0);" class="supply__column-link">пшено</a></li>
				</ul> -->
			</div>
<?php endif; ?>
<?php if (!empty($arResult["PROPERTIES"]["EXPORT_6"]["VALUE"])): ?>
			<div class="supply__column">
				<div class="supply__column-title"><?= $arResult["PROPERTIES"]["EXPORT_6"]["VALUE"]; ?></div>
				<!--<ul class="supply__column-list">
					<li><a href="javascript:void(0);" class="supply__column-link">масло</a></li>
				</ul> -->
			</div>
<?php endif; ?>
		</div>
	</div>
</section>

<!--<section class="contribution js-area">
	<div class='contribution__container'>
		<div class="contribution__top">
			<h2 class="contribution__title _title">вклад в экологию</h2>
			<div class="contribution__slider swiper js-slider-contribution">
				<div class="contribution__swiper swiper-wrapper">
					<div class="contribution__slide swiper-slide">
						<div class="contribution__slide-title">
							Производство полного цикла
						</div>
						<div class="contribution__slide-text">
							Единственный в России производитель особо чистых премиальных видов ферросилиция. Предприятие
							в контуре
							всех принципов ESG повестки, использует технологии опережающего развития
						</div>
					</div>
					<div class="contribution__slide swiper-slide">
						<div class="contribution__slide-title">
							Производство полного цикла
						</div>
						<div class="contribution__slide-text">
							Сеть франчайзи СГМК. Занимается сбором и переработкой отходов лома черных и цветных металлов
						</div>
					</div>
					<div class="contribution__slide swiper-slide">
						<div class="contribution__slide-title">
							Производство полного цикла
						</div>
						<div class="contribution__slide-text">
							Единственный в России производитель особо чистых премиальных видов ферросилиция. Предприятие
							в контуре
							всех принципов ESG повестки, использует технологии опережающего развития
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contribution__inner">
			<div class="contribution__photos swiper js-slider-photos">
				<div class="contribution__swiper swiper-wrapper">
					<div class="contribution__photo swiper-slide">
						<picture>
							<source media="(max-width: 767px)"
							        srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/01-s.webp, <?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/01-s@2x.webp 2x">
							<source media="(max-width: 992px)"
							        srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/01-m.webp, <?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/01-m@2x.webp 2x">
							<img src="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/01.webp"
							     srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/01@2x.webp 2x"
							     alt="">
						</picture>
					</div>
					<div class="contribution__photo swiper-slide">
						<picture>
							<source media="(max-width: 767px)"
							        srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02-s.webp, <?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02-s@2x.webp 2x">
							<source media="(max-width: 992px)"
							        srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02-m.webp, <?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02-m@2x.webp 2x">
							<img src="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02.webp"
							     srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02@2x.webp 2x"
							     alt="">
						</picture>
					</div>
					<div class="contribution__photo swiper-slide">
						<picture>
							<source media="(max-width: 767px)"
							        srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02-s.webp, <?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02-s@2x.webp 2x">
							<source media="(max-width: 992px)"
							        srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02-m.webp, <?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02-m@2x.webp 2x">
							<img src="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02.webp"
							     srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/contribution/02@2x.webp 2x"
							     alt="">
						</picture>
					</div>
				</div>
				<div class="contribution__arrows swiper__arrows">
					<button type="button"
					        class="contribution__arrow contribution__arrow--prev swiper__arrow swiper__arrow--prev"
					        style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/01.svg")'></button>
					<button type="button"
					        class="contribution__arrow contribution__arrow--next swiper__arrow swiper__arrow--next"
					        style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/02.svg")'></button>
				</div>
			</div>
		</div>
	</div>
</section> -->

<?php if ($arResult["PROPERTIES"]["EMAIL"]["VALUE"] || $arResult["PROPERTIES"]["ADDRESS"]["VALUE"]): ?>
	<section class="contacts">
		<div class='contacts__container'>
			<div class="contacts__inner">
				<div class="contacts__content">
					<h2 class="contacts__title _title">контакты</h2>
					<ul class="contacts__list">
						<?php if ($arResult["PROPERTIES"]["EMAIL"]["VALUE"]): ?>
							<li>
								<a href="mailto:<?= $arResult["PROPERTIES"]["EMAIL"]["VALUE"]; ?>" class="contacts__link"
							       style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/11.svg")'>
									<?= $arResult["PROPERTIES"]["EMAIL"]["VALUE"]; ?>
								</a>
							</li>
						<?php endif; ?>
						<?php if ($arResult["PROPERTIES"]["ADDRESS"]["VALUE"]): ?>
							<li>
								<a href="javascript:void(0);" class="contacts__link"
							       style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/12.svg")'>
									<?= $arResult["PROPERTIES"]["ADDRESS"]["VALUE"]; ?>
								</a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="contacts__map map" id="map" data-key="Ваш API ключ" data-center="[55.779324, 37.581623]"
				     data-icon="Ссылка на иконку"></div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ($arResult["FILES"]): ?>
	<section class="bumph">
		<div class='bumph__container'>
			<h2 class="bumph__title _titleTwo">Документы</h2>
			<div class="bumph__row">
				<?php foreach ($arResult["FILES"] as $file): ?>
					<?php $fileDate = explode(' ', $file['TIMESTAMP_X']); ?>
				
					<div class="bumph__column">
						<div class="bumph__column-content">
							<time class="bumph__column-date"><?= $fileDate[0]; ?></time>
							<div class="bumph__column-text"><?= $file['ORIGINAL_NAME']; ?></div>
						</div>
						<a href="<?= $file['SRC']; ?>" class="bumph__column-link"
						   style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/13.svg")'>Скачать</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ($arResult["CERTIFICATES"]): ?>
	<section class="certificate">
		<div class='certificate__container'>
			<div class="certificate__title _titleTwo">Сертификаты соответствия продукции</div>
			<div class="certificate__slider swiper js-slider-certificate">
				<div class="certificate__swiper swiper-wrapper">
					<?php foreach ($arResult["CERTIFICATES"] as $value): ?>
						<a href="<?= $value; ?>" data-fslightbox="gallery01" class="certificate__slide swiper-slide">
							<div class="certificate__img">
								<img src="<?= $value; ?>" alt="">
							</div>
						</a>
					<?php endforeach; ?>
				</div>
				<div class="certificate__arrows swiper__arrows">
					<button type="button"
					        class="certificate__arrow certificate__arrow--prev swiper__arrow swiper__arrow--prev"
					        style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/01.svg")'></button>
					<button type="button"
					        class="certificate__arrow certificate__arrow--next swiper__arrow swiper__arrow--next"
					        style='--icon:url("<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/icons/02.svg")'></button>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
