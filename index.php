<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty('show-banner', 'Y');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_after.php");
?>

<?php $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main-slider",
	array(
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
		"FIELD_CODE" => array("", ""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
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
); ?>

<section class="decide js-overlap-section js-area">
	<div class='decide__container'>
		<h2 class="decide__title _title"><span>С 2006 года</span>обеспечиваем сырьевую<br/>безопасность России</h2>
		<div class="decide__inner">
			<div class="decide__content">
				<div class="decide__column-text">
					<p>СГМК вносит масштабный вклад в экономику,<br> 
экологию и социальную сферу регионов присутствия.</p>
					<p>Мы являемся надёжным поставщиком лома чёрных и цветных металлов<br> 
на металлургические предприятия Сибири, Урала и Дальнего Востока.<br>
Сохраняем природные ресурсы и снижаем загрязнение окружающей среды.<br>Даём вторую жизнь техногенным отходам — перерабатываем лом<br>
в экоалюминий, крупногабаритные шины в регенерат и резиновую крошку.</p>
				</div>
				<a href="/about/" class="decide__column-link btn">Подробнее о компании</a>
			</div>
			<div class="decide__image">
				<picture>
					<img src="/local/templates/sgmk/assets/static/img/decide/01.jpg" alt="" style='width: 100%;'>
				</picture>
			</div>
		</div>
	</div>
</section>

<?php $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main-news",
	array(
		"ACTIVE_DATE_FORMAT" => "j F, Y",
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
		"FIELD_CODE" => array("", ""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("", ""),
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
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main-news"
	),
	false
); ?>

<section class="produce js-produce">
	<div class='produce__container'>
		<div class="produce__top js-produce-head">
			<h2 class="produce__title _title">
				<span>Поставляем сырьё,</span>
				добываем доломит, <br> производим щебень <br> и не только
			</h2>
			<a href="/business-directions/" class="produce__link btn">Сопровождение бизнеса</a>
		</div>
		<div class="produce__row">
			<div class="produce__column js-produce-column">
				<div class="produce__column-content">
					<h3 class="produce__column-title">Производство <br> ферросплавов</h3>
					<div class="produce__column-text">
						Единственный в России производитель<br>особо чистых премиальных видов ферросилиция.<br>Предприятие
						в контуре всех принципов ESG-повестки,<br>использует технологии опережающего развития
					</div>
					<a href="https://sgmk.ru/business-directions/ferrosplavy-realizatsiya-pobochnoy-produktsii/" class="produce__column-link btn">Узнать подробнее</a>
				</div>
				<div class="produce__column-image">
					<picture>
						<img src="/local/templates/sgmk/assets/static/img/produce/01.jpg" alt="">
					</picture>
				</div>
			</div>
			<div class="produce__column js-produce-column">
				<div class="produce__column-content">
					<h3 class="produce__column-title">Производство <br> вторичного алюминия</h3>
					<div class="produce__column-text">
						Производство оснащено современным оборудованием<br>и&nbsp;выпускает только качественные сплавы,
						отвечающие&nbsp;международным стандартам
					</div>
					<a href="https://sgmk.ru/business-directions/ekoalyuminiy/" class="produce__column-link btn">Узнать подробнее</a>
				</div>
				<div class="produce__column-image">
					<picture>
						<img src="/local/templates/sgmk/assets/static/img/produce/02.jpg" alt="">
					</picture>
				</div>
			</div>
			<div class="produce__column js-produce-column">
				<div class="produce__column-content">
					<h3 class="produce__column-title">Переработка <br> крупногабаритных шин</h3>
					<div class="produce__column-text">
						Новое экологичное производство сырья<br>с высоким содержанием каучука.<br>КГШ перерабатываются
						электромеханическим методом<br>– технология без применения пиролиза и токсичных выбросов.<br>На
						производстве применяется рациональный подход<br>к сохранению почвы и чистоты атмосферы.
					</div>
					<a href="https://sgmk.ru/business-directions/pokupka-i-pererabotka-kgsh/" class="produce__column-link btn">Узнать подробнее</a>
				</div>
				<div class="produce__column-image">
					<picture>
						<img src="/local/templates/sgmk/assets/static/img/produce/03.jpg" alt="">
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="partners js-area">
	<div class='partners__container'>
		<div class="partners__top">
			<h2 class="partners__title _title">
				<span>Ищем партнёров</span>
				по различным <br> направлениям
			</h2>
			<div class="partners__info">
				<div class="partners__info-text">
					СГМК открыта к взаимовыгодному сотрудничеству и ищет партнёров <br>в различных направлениях.
					Мы заинтересованы в партнёрствах с компаниями, специализирующимися на переработке металлолома, <br>
					добыче
					сырьевых ресурсов и производстве строительных материалов.
				</div>
				<a href="/for-partners/" class="partners__info-link btn">Узнать подробнее</a>
			</div>
		</div>
		<div class="partners__inner">
			<div class="partners__slider swiper js-slider-partners">
				<div class="partners__swiper swiper-wrapper">
					<div class="partners__slide swiper-slide">
						<div class="partners__slide-img">
							<picture>
								<img src="/local/templates/sgmk/assets/static/img/partners/01.jpg" alt="">
							</picture>
						</div>
					</div>
					<div class="partners__slide swiper-slide">
						<div class="partners__slide-img">
							<picture>
								<img src="/local/templates/sgmk/assets/static/img/partners/02.jpg" alt="">
							</picture>
						</div>
					</div>
					<div class="partners__slide swiper-slide">
						<div class="partners__slide-img">
							<picture>
								<img src="/local/templates/sgmk/assets/static/img/partners/03.jpg" alt="">
							</picture>
						</div>
					</div>
				</div>
				<div class="partners__arrows swiper__arrows">
					<button type="button"
					        class="partners__arrow partners__arrow--prev swiper__arrow swiper__arrow--prev"
					        style='--icon:url("/local/templates/sgmk/assets/static/img/icons/01.svg")'></button>
					<button type="button"
					        class="partners__arrow partners__arrow--next swiper__arrow swiper__arrow--next"
					        style='--icon:url("/local/templates/sgmk/assets/static/img/icons/02.svg")'></button>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main-partners",
	array(
		"ACTIVE_DATE_FORMAT" => "j F, Y",
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
		"FIELD_CODE" => array("", ""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
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
		"PROPERTY_CODE" => array("*", ""),
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
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main-partners"
	),
	false
); ?>

<section class="planet" data-lp>
	<div class='js-planet'>
		<div class="planet__container">
			<h2 class="planet__title _title"><span>География</span>Присутствия</h2>
			<!-- ?????????
			<ul class="planet__list" style="display: none !important;">
				<li class="planet__item"><a href="javascript:void(0);" class="planet__link _active">Все</a></li>
				<li class="planet__item"><a href="javascript:void(0);" class="planet__link">Сопровождение бизнеса</a>
				</li>
				<li class="planet__item"><a href="javascript:void(0);" class="planet__link">Сеть франчайзинговых
						площадок</a></li>
				<li class="planet__item"><a href="javascript:void(0);" class="planet__link">Основные клиенты и
						поставщики</a></li>
				<li class="planet__item"><a href="javascript:void(0);" class="planet__link">Эксклюзивный трейдинг</a>
				</li>
			</ul>
-->
		</div>
		<div class="planet__row">
			<div class="planet__img">
				<video src="<?= SITE_TEMPLATE_PATH; ?>/assets/static/img/video.mp4" preload="auto" muted playsinline></video>
			</div>
			<div class="planet__svg" data-lp>
				<svg class="svg-desk" height="456" viewBox="0 0 1115 627" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g transform="translate(110,220) scale(0.6)">
						<g filter="url(#filter0_d_5397_16788)">
							<circle cx="901" cy="411" r="6" fill="white"></circle>
							<circle cx="901" cy="411" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter1_d_5397_16788)">
							<circle cx="858" cy="315" r="6" fill="white"></circle>
							<circle cx="858" cy="315" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter2_d_5397_16788)">
							<circle cx="1096" cy="408" r="6" fill="white"></circle>
							<circle cx="1096" cy="408" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter3_d_5397_16788)">
							<circle cx="19" cy="168" r="6" fill="white"></circle>
							<circle cx="19" cy="168" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter4_d_5397_16788)">
							<circle cx="85" cy="16" r="6" fill="white"></circle>
							<circle cx="85" cy="16" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter5_d_5397_16788)">
							<circle cx="200" cy="28" r="6" fill="white"></circle>
							<circle cx="200" cy="28" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter6_d_5397_16788)">
							<circle cx="206" cy="40" r="6" fill="white"></circle>
							<circle cx="206" cy="40" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter7_d_5397_16788)">
							<circle cx="157" cy="132" r="6" fill="white"></circle>
							<circle cx="157" cy="132" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter8_d_5397_16788)">
							<circle cx="251" cy="187" r="6" fill="white"></circle>
							<circle cx="251" cy="187" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter9_d_5397_16788)">
							<circle cx="313" cy="244" r="6" fill="white"></circle>
							<circle cx="313" cy="244" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter10_d_5397_16788)">
							<circle cx="347" cy="212" r="6" fill="white"></circle>
							<circle cx="347" cy="212" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter11_d_5397_16788)">
							<circle cx="387" cy="200" r="6" fill="white"></circle>
							<circle cx="387" cy="200" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter12_d_5397_16788)">
							<circle cx="412" cy="187" r="6" fill="white"></circle>
							<circle cx="412" cy="187" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter13_d_5397_16788)">
							<circle cx="492" cy="161" r="6" fill="white"></circle>
							<circle cx="492" cy="161" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter14_d_5397_16788)">
							<circle cx="475" cy="256" r="6" fill="white"></circle>
							<circle cx="475" cy="256" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter15_d_5397_16788)">
							<circle cx="492" cy="250" r="6" fill="white"></circle>
							<circle cx="492" cy="250" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter16_d_5397_16788)">
							<circle cx="764" cy="293" r="6" fill="white"></circle>
							<circle cx="764" cy="293" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter17_d_5397_16788)">
							<circle cx="752" cy="379" r="6" fill="white"></circle>
							<circle cx="752" cy="379" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter18_d_5397_16788)">
							<circle cx="762" cy="388" r="6" fill="white"></circle>
							<circle cx="762" cy="388" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter19_d_5397_16788)">
							<circle cx="559" cy="281" r="6" fill="white"></circle>
							<circle cx="559" cy="281" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter20_d_5397_16788)">
							<circle cx="634" cy="323" r="6" fill="white"></circle>
							<circle cx="634" cy="323" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter21_d_5397_16788)">
							<circle cx="641" cy="339" r="6" fill="white"></circle>
							<circle cx="641" cy="339" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter22_d_5397_16788)">
							<circle cx="647" cy="374" r="6" fill="white"></circle>
							<circle cx="647" cy="374" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter23_d_5397_16788)">
							<circle cx="654" cy="385" r="6" fill="white"></circle>
							<circle cx="654" cy="385" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter24_d_5397_16788)">
							<circle cx="667" cy="388" r="6" fill="white"></circle>
							<circle cx="667" cy="388" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter25_d_5397_16788)">
							<circle cx="673" cy="400" r="6" fill="white"></circle>
							<circle cx="673" cy="400" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter26_d_5397_16788)">
							<circle cx="703" cy="390" r="6" fill="white"></circle>
							<circle cx="703" cy="390" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter27_d_5397_16788)">
							<circle cx="628" cy="351" r="6" fill="white"></circle>
							<circle cx="628" cy="351" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter28_d_5397_16788)">
							<circle cx="691" cy="434" r="6" fill="white"></circle>
							<circle cx="691" cy="434" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter29_d_5397_16788)">
							<circle cx="740" cy="434" r="6" fill="white"></circle>
							<circle cx="740" cy="434" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter30_d_5397_16788)">
							<circle cx="634" cy="309" r="6" fill="white"></circle>
							<circle cx="634" cy="309" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g data-tip="<div class=&quot;tip&quot;>Новокузнецк<br> <span>Сибирская горно-металлургическая компания</span></div>" filter="url(#filter31_d_5397_16788)" class="">
							<circle cx="627" cy="275" r="14" fill="white"></circle>
							<circle cx="627" cy="275" r="14" stroke="#112E8D" stroke-width="10"></circle>
						</g>
						<g filter="url(#filter32_d_5397_16788)">
							<circle cx="568" cy="297" r="6" fill="white"></circle>
							<circle cx="568" cy="297" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter33_d_5397_16788)">
							<circle cx="556" cy="338" r="6" fill="white"></circle>
							<circle cx="556" cy="338" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter34_d_5397_16788)">
							<circle cx="574" cy="378" r="6" fill="white"></circle>
							<circle cx="574" cy="378" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter35_d_5397_16788)">
							<circle cx="393" cy="161" r="6" fill="white"></circle>
							<circle cx="393" cy="161" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter36_d_5397_16788)">
							<circle cx="399" cy="129" r="6" fill="white"></circle>
							<circle cx="399" cy="129" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter37_d_5397_16788)">
							<circle cx="431" cy="103" r="6" fill="white"></circle>
							<circle cx="431" cy="103" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter38_d_5397_16788)">
							<circle cx="375" cy="117" r="6" fill="white"></circle>
							<circle cx="375" cy="117" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter39_d_5397_16788)">
							<circle cx="341" cy="123" r="6" fill="white"></circle>
							<circle cx="341" cy="123" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
						<g filter="url(#filter40_d_5397_16788)">
							<circle cx="335" cy="167" r="6" fill="white"></circle>
							<circle cx="335" cy="167" r="6" stroke="#112E8D" stroke-width="5"></circle>
						</g>
					</g>
					<defs>
						<filter id="filter0_d_5397_16788" x="882.5" y="395.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter1_d_5397_16788" x="839.5" y="299.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter2_d_5397_16788" x="1077.5" y="392.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter3_d_5397_16788" x="0.5" y="152.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter4_d_5397_16788" x="66.5" y="0.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter5_d_5397_16788" x="181.5" y="12.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter6_d_5397_16788" x="187.5" y="24.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter7_d_5397_16788" x="138.5" y="116.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter8_d_5397_16788" x="232.5" y="171.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter9_d_5397_16788" x="294.5" y="228.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter10_d_5397_16788" x="328.5" y="196.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter11_d_5397_16788" x="368.5" y="184.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter12_d_5397_16788" x="393.5" y="171.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter13_d_5397_16788" x="473.5" y="145.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter14_d_5397_16788" x="456.5" y="240.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter15_d_5397_16788" x="473.5" y="234.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter16_d_5397_16788" x="745.5" y="277.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter17_d_5397_16788" x="733.5" y="363.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter18_d_5397_16788" x="743.5" y="372.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter19_d_5397_16788" x="540.5" y="265.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter20_d_5397_16788" x="615.5" y="307.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter21_d_5397_16788" x="622.5" y="323.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter22_d_5397_16788" x="628.5" y="358.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter23_d_5397_16788" x="635.5" y="369.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter24_d_5397_16788" x="648.5" y="372.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter25_d_5397_16788" x="654.5" y="384.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter26_d_5397_16788" x="684.5" y="374.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter27_d_5397_16788" x="609.5" y="335.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter28_d_5397_16788" x="672.5" y="418.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter29_d_5397_16788" x="721.5" y="418.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter30_d_5397_16788" x="615.5" y="293.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter31_d_5397_16788" x="598" y="249" width="58" height="58" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter32_d_5397_16788" x="549.5" y="281.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter33_d_5397_16788" x="537.5" y="322.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter34_d_5397_16788" x="555.5" y="362.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter35_d_5397_16788" x="374.5" y="145.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter36_d_5397_16788" x="380.5" y="113.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter37_d_5397_16788" x="412.5" y="87.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter38_d_5397_16788" x="356.5" y="101.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter39_d_5397_16788" x="322.5" y="107.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
						<filter id="filter40_d_5397_16788" x="316.5" y="151.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="3"></feOffset>
							<feGaussianBlur stdDeviation="5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0.0651 0 0 0 0 0.179387 0 0 0 0 0.5549 0 0 0 0.3 0"></feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5397_16788"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5397_16788" result="shape"></feBlend>
						</filter>
					</defs>
				</svg>
			</div>
		</div>
	</div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
