<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Поставщикам");
$APPLICATION->SetPageProperty('show-banner', 'Y');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_after.php");
?><section class="home js-first">
<div class="home__container">
	<div class="home__inner">
		<div class="home__breadcrumb breadcrumb" style="--linkColor: #bbbbbf; --activeColor: #fff">
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
		<h1 class="home__title _title">Поставщикам</h1>
		<div class="home__text">
			 Компания АО «СГМК» осуществляет закупку товаров<br>
			 на&nbsp;электронной торговой площадке.
		</div>
 <a href="https://www.b2b-center.ru/market/?f_keyword=%D0%90%D0%9E+%22%D0%A1%D0%93%D0%9C%D0%9A%22&searching=1&company_type=2&price_currency=0&date=1&trade=all#search-result" class="home__link btn btn--whte">Перейти на торговую площадку</a>
	</div>
	<div class="home__img">
 <img src="/local/templates/sgmk/assets/static/img/home/04.jpg" alt="">
	</div>
</div>
 </section>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"for-providers",
	Array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array("",""),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"TOP_DEPTH" => "2"
	)
);?> <section class="purchase">
<div class="purchase__container">
	<div class="purchase__content">
		<div class="purchase__title _title">
			 Действующие <br>
			 процедуры закупок
		</div>
		<div class="purchase__text">
			<p>
				 Компания СГМК осуществляет закупки товаров <br>
				 на электронной торговой площадке b2b
			</p>
		</div>
 <a href="https://www.b2b-center.ru/market/?f_keyword=%D0%90%D0%9E+%22%D0%A1%D0%93%D0%9C%D0%9A%22&searching=1&company_type=2&price_currency=0&date=1&trade=all#search-result" class="purchase__link btn btn--whte">Перейти на торговую площадку</a>
	</div>
	<div class="purchase__img">
 <span> <source media="(max-width: 767px)" srcset="/local/templates/sgmk/assets/static/img/purchase/01-s.webp, /local/templates/sgmk/assets/static/img/purchase/01-s@2x.webp 2x"> <source media="(max-width: 992px)" srcset="/local/templates/sgmk/assets/static/img/purchase/01-m.webp, /local/templates/sgmk/assets/static/img/purchase/01-m@2x.webp 2x"> <img src="/local/templates/sgmk/assets/static/img/purchase/01.webp" srcset="/local/templates/sgmk/assets/static/img/purchase/01@2x.webp 2x" alt=""> </span>
	</div>
</div>
 </section> <section class="info">
<div class="info__container">
	<div class="b2b-center-market" data-iframe="sgmk" data-domain="www.b2b-center.ru">
		 <iframe referrerpolicy="strict-origin-when-cross-origin" height="100%" width="100%" frameborder="0" class="b2b-center-market-iframe" scrolling="no" loading="lazy" style="overflow: hidden; height: 408.788px;" src="https://www.b2b-center.ru/market/iframe/?v=2&iframe=sgmk" id="iFrameResizer0">
		</iframe>
	</div>
</div>
 </section> <section class="info">
<div class="info__container">
	<div class="info__title _title">
		 контакты
	</div>
	<div class="info__text">
		<p>
			 Общие коммерческие предложения и презентации потенциальных поставщиков, а также предложения <br>
			 и замечания по работе службы снабжения могут быть направлены на электронный адрес:
		</p>
	</div>
 <a href="mailto:d.snab@sgmk-group.ru" class="info__link _title">d.snab@sgmk-group.ru</a>
	<div class="info__row">
		<div class="info__column info__column--decor">
			<div class="info__items">
				<div class="info__item">
					<div class="info__item-title">
						 Дирекция по снабжению, приемная
					</div>
 <a href="tel:+73843328547" class="info__item-link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/14.svg&quot;)">8 (3843) 32-85-47</a>
				</div>
				<div class="info__item">
					<div class="info__item-title">
						 Адрес для почтовой корреспонденции
					</div>
 <address class="info__item-link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/15.svg&quot;)">654041, Кемеровская обл. - Кузбасс, г. Новокузнецк, <br>
					 ул. Кутузова, д. 37а, пом. 406 </address>
				</div>
			</div>
		</div>
		<div class="info__column">
			<div class="info__items">
				<div class="info__item">
					<div class="info__item-title">
						 Отдел инвестиций
					</div>
					<div class="info__item-text">
						 Закупаемые товарные категории: технически сложная техника для&nbsp;реализации инвестиционных проектов
					</div>
					<div class="info__item-name">
						 Виктория Битюцкая
					</div>
					<div class="info__item-post">
						 Начальник отдела
					</div>
 <a href="tel:+73843328547" class="info__item-link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/14.svg&quot;)">8 (3843) 32-85-47, вн. 3760</a>
				</div>
				<div class="info__item">
					<div class="info__item-title">
						 Отдел оборудования
					</div>
					<div class="info__item-text">
						 Закупаемые товарные категории: механическое и электротехническое оборудование, запасные части и комплектующие к нему
					</div>
					<div class="info__item-name">
						 Яна Вострикова
					</div>
					<div class="info__item-post">
						 Начальник отдела
					</div>
 <a href="tel:+73843328547" class="info__item-link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/14.svg&quot;)">8 (3843) 32-85-47, вн. 3769</a>
				</div>
			</div>
		</div>
		<div class="info__column">
			<div class="info__items">
				<div class="info__item">
					<div class="info__item-title">
						 Отдел материалов
					</div>
					<div class="info__item-text">
						 Закупаемые товарные категории: материалы для ведения <br>
						 операционной деятельности
					</div>
					<div class="info__item-name">
						 Наталья Иванова
					</div>
					<div class="info__item-post">
						 Начальник отдела
					</div>
 <a href="tel:+73843328547" class="info__item-link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/14.svg&quot;)">8 (3843) 32-85-47, вн. 3654</a>
				</div>
				<div class="info__item">
					<div class="info__item-title">
						 Отдел снабжения Западно-Сибирского Электрометаллургического Завода (ЗСЭМЗ)
					</div>
					<div class="info__item-text">
						 Закупаемые товарные категории: минеральное сырье (уголь, руда,кварциты)
					</div>
					<div class="info__item-name">
						 Евгения Новикова
					</div>
					<div class="info__item-post">
						 Начальник отдела
					</div>
 <a href="tel:+73843328544" class="info__item-link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/14.svg&quot;)">8 (3843) 32-85-44, вн. 3686</a><br>
 <a href="tel:+79609152231" class="info__item-link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/14.svg&quot;)">8 (960) 915-22-31</a><br>
 <br>
				</div>
			</div>
		</div>
	</div>
</div>
 </section><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>