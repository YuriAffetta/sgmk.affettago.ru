<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Направления бизнеса");
$APPLICATION->SetPageProperty('show-banner', 'Y');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_after.php");
?>

<section class="home js-first">
	<div class="home__container">
		<div class="home__inner">
			<div class="home__breadcrumb breadcrumb" style="--linkColor: #bbbbbf; --activeColor: #fff">
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
			<h1 class="home__title _title">
				Поставляем сырье,<br>добываем доломит,<br>производим щебень<br>и не только
			</h1>
		</div>
		
		<div class="home__img">
			<span>
				<source media="(max-width: 1360px)" srcset="/local/templates/sgmk/assets/static/img/home/01-m.jpeg">
				<img src="/local/templates/sgmk/assets/static/img/home/01.jpeg" alt="">
			</span>
		</div>
	</div>
</section>

<?php $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"business-directions", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_SECTION_TITLE",
			1 => "",
		),
		"TOP_DEPTH" => "2",
		"COMPONENT_TEMPLATE" => "business-directions"
	),
	false
); ?>

<?php /*
<section class="accompaniment">
	<div class="accompaniment__container">
		<div class="accompaniment__inner">
			<div class="accompaniment__content">
				<h2 class="accompaniment__title _title">
					Сопровождение
					бизнеса
				</h2>
				<div class="accompaniment__text">
Стабильность и успешность ведения бизнеса наших партнёров являются приоритетом для нашей компании. Мы активно участвуем в их развитии, предоставляем необходимую поддержку и консультации, а также помогаем разрабатывать и реализовывать стратегии для достижения устойчивого роста
				</div>
				
				<div class="accompaniment__img">
					<img src="/local/templates/sgmk/assets/static/img/accompaniment/01.jpg" alt="">
				</div>
			</div>
			<div class="accompaniment__items" data-da=".accompaniment__content, 992, 2">
				<div class="accompaniment__item">
					<ul class="accompaniment__list">
						<!-- <li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">Комплексное снабжение металлургических
								клиентов качественным ломом</a></li> -->
						<!-- <li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
								Логистика и транспортировка -->
						</a></li>
						<li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link"
						       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
								Ферросплавы, <br> реализация побочной продукции
							</a></li>
						<li><a href="/business-directions/ekomet/" class="accompaniment__link"
						       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
								Экоалюминий
							</a></li>
						<!-- <li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
								Доломит и доломитовый щебень -->
						</a></li>
						<li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link"
						       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">Покупка
								и переработка КГШ</a></li>
					</ul>
				</div>
				<div class="accompaniment__item">
					<ul class="accompaniment__list">
						<li><a href="/business-directions/tekhnotsentr/" class="accompaniment__link"
						       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">Полипропиленовые
								мешки, упаковка</a></li>
						<!-- <li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">Промышленный парк инноваций <br>во вторичном
								использовании
								ресурсов</a></li> -->
						<li><a href="/business-directions/sibdolomit/" class="accompaniment__link"
						       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">Торговля
								щебнем, скрапом</a></li>
						<!-- <li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">Коммерческая недвижимость в аренду</a></li> -->
						<!-- <li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">Общее образование</a></li> -->
						<!-- <li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="accompaniment__link" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">Сбор и переработка металлолома</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="area">
	<div class="area__container">
		<div class="area__row">
			<div class="area__column">
				<h3 class="area__column-title _title">
					сеть
					франчайзинговых <br> площадок
				</h3>
				<div class="area__column-inner">
					<div class="area__column-content">
						<div class="area__column-text">
							Единственный в&nbsp;России производитель особо чистых премиальных видов ферросилиция.
							Предприятие
							в&nbsp;контуре всех принципов ESG повестки, использует технологии опережающего развития
						</div>
						
						<ul class="area__column-list">
							<li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="area__column-link"
							       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
									Комплексное снабжение ООО "Амурсталь" <br> ломом</a></li>
						</ul>
					</div>
					<div class="area__column-img">
						<img src="/local/templates/sgmk/assets/static/img/area/01.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="area__column">
				<h3 class="area__column-title _title">
					основные клиенты <br> и поставщики
				</h3>
				<div class="area__column-inner">
					<div class="area__column-content">
						<div class="area__column-text">
							Единственный в&nbsp;России производитель особо чистых премиальных видов ферросилиция.
							Предприятие
							в&nbsp;контуре всех принципов ESG повестки, использует технологии опережающего развития
						</div>
						
						<ul class="area__column-list">
							<li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="area__column-link"
							       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
									Производство металлошихты, <br>производство щебня</a></li>
						</ul>
					</div>
					<div class="area__column-img">
						<img src="/local/templates/sgmk/assets/static/img/area/02.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="area__column">
				<h3 class="area__column-title _title">
					эксклюзивный <br>
					трейдинг
				</h3>
				<div class="area__column-inner">
					<div class="area__column-content">
						<div class="area__column-text">
							Единственный в&nbsp;России производитель особо чистых премиальных видов ферросилиция.
							Предприятие
							в&nbsp;контуре всех принципов ESG повестки, использует технологии опережающего развития
						</div>
						
						<ul class="area__column-list">
							<li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="area__column-link"
							       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
									Пиломатериалы</a></li>
							<li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="area__column-link"
							       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
									Щебень</a></li>
							<li><a href="/business-directions/soprovozhdenie-biznesa/84/" class="area__column-link"
							       style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/03.svg&quot;)">
									Переработка лома, производство щебня</a></li>
						</ul>
					</div>
					<div class="area__column-img">
						<img src="/local/templates/sgmk/assets/static/img/area/03.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
*/ ?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>