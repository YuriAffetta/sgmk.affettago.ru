<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Партнерам");
$APPLICATION->SetPageProperty('show-banner', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
?><section class="home js-first">
<div class="home__container">
	<div class="home__inner">
		<div class="home__breadcrumb breadcrumb" style="--linkColor: #fff; --activeColor: #fff">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"sgmk-inner",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
		</div>
		<h1 class="home__title home__title--two _title">
		Мы рады новым надежным партнерам </h1>
 <a href="/local/templates/sgmk/blocks/popups//popup-callback03.html" class="home__link btn btn--whte" data-popup="#callback-modal03">Оставить заявку</a>
	</div>
	<div class="home__img">
		<img src="/company/07.png"><br>
	</div>
</div>
 </section> <section class="decide decide--two">
<div class="decide__container">
	<h2 class="decide__title _title">Что мы предлагаем</h2>
	<div class="decide__inner">
		<div class="decide__content">
			<div class="decide__column-text">
				<p>
					 Компания АО «СГМК» приглашает производителей продукции из металлопроката к сотрудничеству для изготовления металлоконструкций и готовой продукции на условиях <br>
					 партнерской схемы.
				</p>
				<p>
					 Мы убеждены, что ответственное ведение бизнеса и целенаправленная деятельность группы в области снижения негативного воздействия на окружающую среду, поддержки местных сообществ, обеспечения безопасных и достойных <br>
					 условий труда являются ценным вкладом Компании в <br>
					 достижение глобальных целей в области устойчивого развития.
				</p>
			</div>
			 <!--<div class="decide__column-info info-decide info-decide--two" data-da=".decide__inner, 767, last">
				<div class="info-decide__content">
<time datetime="2016-11-18T09:54" class="info-decide__date">22.09.2023</time>
					<h3 class="info-decide__title">
					Инвестиционный манифест СГМК </h3>
				</div>
 <a href="javascript:void(0);" class="info-decide__file" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/13.svg&quot;)">Скачать</a>
			</div> -->
		</div>
		<div class="decide__image">
 <img src="/local/templates/sgmk/assets/static/img/decide/04.jpg" alt="">
		</div>
	</div>
</div>
 </section> <section class="produce produce--two">
<div class="produce__container">
	<div class="produce__top">
		<h2 class="produce__title _title">
		кто может стать нашим партнером </h2>
	</div>
	<div class="produce__slider swiper js-slider-produce">
		<div class="produce__swiper swiper-wrapper">
			<div class="produce__column produce__slide swiper-slide">
				<div class="produce__column-content produce__column-content--two">
					<h3 class="produce__column-subtitle">Вы имеете экспертизу и практический опыт в&nbsp;производстве металлоизделий для самых разных сфер применения</h3>
					<div class="produce__column-text">
						<p>
							 Оценке подлежат коммерческие параметры предложения, свойства предлагаемого продукта, а&nbsp;также квалификация и&nbsp;благонадежность поставщика. Решение о&nbsp;выборе поставщика производится комиссионно, согласно внутренним стандартам.
						</p>
					</div>
				</div>
				<div class="produce__column-image">
 <img src="/local/templates/sgmk/assets/static/img/produce/09.jpg" alt="">
				</div>
			</div>
			<div class="produce__column produce__slide swiper-slide">
				<div class="produce__column-content produce__column-content--two">
					<h3 class="produce__column-subtitle">Вам важна стабильность и ритмичная загрузка мощностей</h3>
					<div class="produce__column-text">
						<p>
							 Мы&nbsp;готовы к&nbsp;регулярному размещению заказов при условии соответствия предложения поставщика текущей рыночной ситуации. Новые поставщики имеют возможность войти в&nbsp;круг постоянных по&nbsp;факту исполнения тестовых поставок или испытания опытной партии.
						</p>
					</div>
				</div>
				<div class="produce__column-image">
 <span> <source media="(max-width: 767px)" srcset="/local/templates/sgmk/assets/static/img/produce/06-s.webp, /local/templates/sgmk/assets/static/img/produce/06-s@2x.webp 2x"> <source media="(max-width: 1360px)" srcset="/local/templates/sgmk/assets/static/img/produce/06-m.webp, /local/templates/sgmk/assets/static/img/produce/06-m@2x.webp 2x"> <img src="/local/templates/sgmk/assets/static/img/produce/06.webp" srcset="/local/templates/sgmk/assets/static/img/produce/06@2x.webp 2x" alt=""> </span>
				</div>
			</div>
		</div>
	</div>
</div>
 </section> <section class="contribution">
<div class="contribution__container">
	<div class="contribution__top contribution__top--two">
		<h2 class="contribution__title _title"><span>преимущества</span>сотрудничества</h2>
		<div class="contribution__slider swiper js-slider-contribution">
			<div class="contribution__swiper swiper-wrapper">
				<div class="contribution__slide swiper-slide">
					<div class="contribution__slide-title">
						 Флагман Ломозаготовки
					</div>
					<div class="contribution__slide-text">
						 За 17 лет работы компания зарекомендовала себя надёжным партнёром с&nbsp;безупречной репутацией
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
						 Единственный в России производитель особо чистых премиальных видов ферросилиция. Предприятие в контуре всех принципов ESG повестки, использует технологии опережающего развития
					</div>
				</div>
			</div>
		</div>
 <a href="/local/templates/sgmk/blocks/popups//popup-callback03.html" class="contribution__btn btn" data-popup="#callback-modal03">Стать партнером</a>
	</div>
	<div class="contribution__inner">
			<div class="contribution__photos swiper js-slider-photos">
				<div class="contribution__swiper swiper-wrapper">
					<div class="contribution__photo swiper-slide">
						<img src="/local/templates/sgmk/assets/static/img/contribution/04.jpg" alt="" />
					</div>
					<div class="contribution__photo swiper-slide">
						<img src="/local/templates/sgmk/assets/static/img/contribution/05.jpeg" alt="" />
					</div>
					<div class="contribution__photo swiper-slide">
						<img src="/local/templates/sgmk/assets/static/img/contribution/06.jpeg" alt="" />
					</div>
				</div>
				<div class="contribution__arrows swiper__arrows">
					<button type="button" class="contribution__arrow contribution__arrow--prev swiper__arrow swiper__arrow--prev" style='--icon:url("/local/templates/sgmk/assets/static/img/icons/01.svg")'></button>
					<button type="button" class="contribution__arrow contribution__arrow--next swiper__arrow swiper__arrow--next" style='--icon:url("/local/templates/sgmk/assets/static/img/icons/02.svg")'></button>
				</div>
			</div>
		</div>
</div>
 </section>
<?/*$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"files-list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "for_partner",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "100",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("*"),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);*/?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>