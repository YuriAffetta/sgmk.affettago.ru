<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Работа в СГМК");
$APPLICATION->SetPageProperty('show-banner', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
?>

<section class="home js-first">
	<div class='home__container'>
		<div class="home__inner">
			<div class="home__breadcrumb breadcrumb" style='--linkColor: #bbbbbf; --activeColor: #fff'>
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
			<h1 class="home__title _title">Работа в СГМК</h1>
			<div class="home__text">
				Наша работа помогает улучшить экономику Кемеровской
области и регионов присутствия, непрерывно обеспечивать металлургические
производства региона и страны необходимым сырьем.

			</div>
			<a href="/vacancies/" class="home__link btn btn--whte">Смотреть вакансии</a>
		</div>
		<div class="home__img">
			<img src="/local/templates/sgmk/assets/static/img/home/06.jpeg" alt="" />
		</div>
	</div>
</section>
<section class="work">
	<div class='work__container'>
		<div class="work__inner">
			<div data-tabs data-tabs-animate="800" class="work__content tabs">
				<div class="work__pages">
					<nav class="work__list tabs__navigation" data-tabs-titles>
						<button type="button" class="work__link tabs__title _tab-active">Работа у нас</button>
						<button type="button" class="work__link tabs__title">Производство</button>
						<button type="button" class="work__link tabs__title">Офис</button>
						<button type="button" class="work__link tabs__title">IT и digital</button>
						<button type="button" class="work__link tabs__title">Молодым специалистам</button>
					</nav>
				</div>
				<div data-tabs-body class="work__body tabs__content">
					<div class="work__column tabs__body">
						<div class="work__row">
							<div class="work__column">
								<div class="work__column-title _title">Обучение и развитие</div>
								<div class="work__column-text">
									<p>
										Мы заинтересованы в том, чтобы наши сотрудники развивались. Для этого мы пишем курсы, проводим
										аттестации, составляем планы обучения и отправляем сотрудников на профильные конференции и семинары.
									</p>
									<p>
										Для новичков действует программа адаптации: знакомим с коллективом и компанией, отвечаем на вопросы
										и
										поддерживаем во время испытательного срока. У каждого есть наставник, который помогает разобраться в
										информации и обучает тонкостям работы. Всё это — чтобы сотрудникам было легко влиться в коллектив.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/01.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">карьерный рост</div>
								<div class="work__column-text">
									<p>
										Наши сотрудники работают в команде, вместе развивают идеи, осваивают новые направления и улучшают
										процессы. Например, наши аналитики, программисты и HR-специалисты вместе работают над проектом
										развития
										персонала.
									</p>
									<p>
										Сотрудники могут попасть в кадровый резерв, получить повышение, стать менеджером проекта,
										параллельно
										развиваться в другой сфере или перейти в другой отдел. Всё это — чтобы мотивированные и талантливые
										сотрудники чувствовали себя хорошо.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/02.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">отдых</div>
								<div class="work__column-text">
									<p>
										Отдыхать мы тоже умеем: проводим спортивные соревнования, отмечаем профессиональные праздники,
										собираемся после работы на чай и пиццу и выезжаем на природу.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/03.jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
					<div class="work__column tabs__body">
						<div class="work__row">
							<div class="work__column">
								<div class="work__column-title _title">Производство</div>
								<div class="work__column-text">
									<p>
										Мы не боимся экспериментов и нестандартных решений, однако заботимся о каждом сотруднике, его
										безопасности и комфортных условиях труда. Ценим и уважаем опыт, прислушиваемся к новым идеям — и
										вместе совершенствуем производственные процессы.
									</p>
								
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/01.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">карьерный рост</div>
								<div class="work__column-text">
									<p>
										Наши сотрудники работают в команде, вместе развивают идеи, осваивают новые направления и улучшают
										процессы. Например, наши аналитики, программисты и HR-специалисты вместе работают над проектом
										развития
										персонала.
									</p>
									<p>
										Сотрудники могут попасть в кадровый резерв, получить повышение, стать менеджером проекта,
										параллельно
										развиваться в другой сфере или перейти в другой отдел. Всё это — чтобы мотивированные и талантливые
										сотрудники чувствовали себя хорошо.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/02.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">отдых</div>
								<div class="work__column-text">
									<p>
										Отдыхать мы тоже умеем: проводим спортивные соревнования, отмечаем профессиональные праздники,
										собираемся после работы на чай и пиццу и выезжаем на природу.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/03.jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
					<div class="work__column tabs__body">
						<div class="work__row">
							<div class="work__column">
								<div class="work__column-title _title">Обучение и развитие</div>
								<div class="work__column-text">
									<p>
										Мы заинтересованы в том, чтобы наши сотрудники развивались. Для этого мы пишем курсы, проводим
										аттестации, составляем планы обучения и отправляем сотрудников на профильные конференции и семинары.
									</p>
									<p>
										Для новичков действует программа адаптации: знакомим с коллективом и компанией, отвечаем на вопросы
										и
										поддерживаем во время испытательного срока. У каждого есть наставник, который помогает разобраться в
										информации и обучает тонкостям работы. Всё это — чтобы сотрудникам было легко влиться в коллектив.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/01.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">карьерный рост</div>
								<div class="work__column-text">
									<p>
										Наши сотрудники работают в команде, вместе развивают идеи, осваивают новые направления и улучшают
										процессы. Например, наши аналитики, программисты и HR-специалисты вместе работают над проектом
										развития
										персонала.
									</p>
									<p>
										Сотрудники могут попасть в кадровый резерв, получить повышение, стать менеджером проекта,
										параллельно
										развиваться в другой сфере или перейти в другой отдел. Всё это — чтобы мотивированные и талантливые
										сотрудники чувствовали себя хорошо.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/02.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">отдых</div>
								<div class="work__column-text">
									<p>
										Отдыхать мы тоже умеем: проводим спортивные соревнования, отмечаем профессиональные праздники,
										собираемся после работы на чай и пиццу и выезжаем на природу.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/03.jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
					<div class="work__column tabs__body">
						<div class="work__row">
							<div class="work__column">
								<div class="work__column-title _title">Обучение и развитие</div>
								<div class="work__column-text">
									<p>
										Мы заинтересованы в том, чтобы наши сотрудники развивались. Для этого мы пишем курсы, проводим
										аттестации, составляем планы обучения и отправляем сотрудников на профильные конференции и семинары.
									</p>
									<p>
										Для новичков действует программа адаптации: знакомим с коллективом и компанией, отвечаем на вопросы
										и
										поддерживаем во время испытательного срока. У каждого есть наставник, который помогает разобраться в
										информации и обучает тонкостям работы. Всё это — чтобы сотрудникам было легко влиться в коллектив.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/01.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">карьерный рост</div>
								<div class="work__column-text">
									<p>
										Наши сотрудники работают в команде, вместе развивают идеи, осваивают новые направления и улучшают
										процессы. Например, наши аналитики, программисты и HR-специалисты вместе работают над проектом
										развития
										персонала.
									</p>
									<p>
										Сотрудники могут попасть в кадровый резерв, получить повышение, стать менеджером проекта,
										параллельно
										развиваться в другой сфере или перейти в другой отдел. Всё это — чтобы мотивированные и талантливые
										сотрудники чувствовали себя хорошо.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/02.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">отдых</div>
								<div class="work__column-text">
									<p>
										Отдыхать мы тоже умеем: проводим спортивные соревнования, отмечаем профессиональные праздники,
										собираемся после работы на чай и пиццу и выезжаем на природу.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/03.jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
					<div class="work__column tabs__body">
						<div class="work__row">
							<div class="work__column">
								<div class="work__column-title _title">Обучение и развитие</div>
								<div class="work__column-text">
									<p>
										Мы заинтересованы в том, чтобы наши сотрудники развивались. Для этого мы пишем курсы, проводим
										аттестации, составляем планы обучения и отправляем сотрудников на профильные конференции и семинары.
									</p>
									<p>
										Для новичков действует программа адаптации: знакомим с коллективом и компанией, отвечаем на вопросы
										и
										поддерживаем во время испытательного срока. У каждого есть наставник, который помогает разобраться в
										информации и обучает тонкостям работы. Всё это — чтобы сотрудникам было легко влиться в коллектив.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/01.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">карьерный рост</div>
								<div class="work__column-text">
									<p>
										Наши сотрудники работают в команде, вместе развивают идеи, осваивают новые направления и улучшают
										процессы. Например, наши аналитики, программисты и HR-специалисты вместе работают над проектом
										развития
										персонала.
									</p>
									<p>
										Сотрудники могут попасть в кадровый резерв, получить повышение, стать менеджером проекта,
										параллельно
										развиваться в другой сфере или перейти в другой отдел. Всё это — чтобы мотивированные и талантливые
										сотрудники чувствовали себя хорошо.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/02.jpg" alt="" />
								</div>
							</div>
							<div class="work__column">
								<div class="work__column-title _title">отдых</div>
								<div class="work__column-text">
									<p>
										Отдыхать мы тоже умеем: проводим спортивные соревнования, отмечаем профессиональные праздники,
										собираемся после работы на чай и пиццу и выезжаем на природу.
									</p>
								</div>
								<div class="work__column-img">
									<img src="/local/templates/sgmk/assets/static/img/work/03.jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="work__vacan">
				<div class="work__aside">
					<div class="work__aside-title">Вакансии</div>
					<?php /*
					<ul class="work__aside-list">
						<li><a href="/vacancies/" class="work__aside-link _active">Все</a></li>
						<li><a href="/vacancies/?arrFilterVacancies_23_1446970897=Y&set_filter=Y" class="work__aside-link">Производство</a></li>
						<li><a href="/vacancies/?arrFilterVacancies_23_2924030997=Y&set_filter=Y" class="work__aside-link">Офис</a></li>
						<li><a href="/vacancies/?arrFilterVacancies_23_2406624854=Y&set_filter=Y" class="work__aside-link">IT и digital</a></li>
					</ul>
                    */ ?>
					<?php $APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"vacancies-small",
						array(
							"ACTIVE_DATE_FORMAT" => "j F, Y",
							"ADD_SECTIONS_CHAIN" => "N",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "N",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array("", ""),
							"FILTER_NAME" => "arrFilterVacancies",
							"INSTANT_RELOAD" => "Y",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "9",
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
							"PAGER_TEMPLATE" => "sgmk",
							"PAGER_TITLE" => "Вакансии",
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
							"STRICT_SECTION_CHECK" => "N",
							"COMPONENT_TEMPLATE" => "vacancies-small"
						),
						false
					); ?>
					<a href="/vacancies/" class="work__aside-more btn">Все вакансии</a>
				</div>
			</div>
		</div>
	
	</div>

</section>
<section class="vacancy">
	<div class='vacancy__container'>
		<div class="vacancy__row">
			<a href="/vacancies/" class="vacancy__column">
				<div class="vacancy__column-title">Все вакансии</div>
				<div class="vacancy__column-text">369 вакансий</div>
			</a>
			<?php /*
			<a href="/vacancies/?arrFilterVacancies_23_1446970897=Y&set_filter=Y" class="vacancy__column">
				<div class="vacancy__column-title">Производство</div>
				<div class="vacancy__column-text">15 вакансий</div>
			</a>
			<a href="/vacancies/?arrFilterVacancies_23_2924030997=Y&set_filter=Y" class="vacancy__column">
				<div class="vacancy__column-title">Офис</div>
				<div class="vacancy__column-text">100 вакансий</div>
			</a>
			<a href="/vacancies/?arrFilterVacancies_23_2406624854=Y&set_filter=Y" class="vacancy__column">
				<div class="vacancy__column-title">IT и digital</div>
				<div class="vacancy__column-text">8 вакансий</div>
			</a>
            */ ?>
		</div>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>