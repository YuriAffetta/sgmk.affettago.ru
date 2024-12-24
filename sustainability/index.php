<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Устойчивое развитие");
$APPLICATION->SetPageProperty('show-banner', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
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
		<h1 class="home__title home__title--two _title">
Мы не наследуем планету от наших предков, мы берем ее в долг у наших детей </h1>
	</div>
	<div class="home__img">
		<img width="240" src="/company/scale_1200.jpg" height="150"><br>
	</div>
</div>
 </section> <section class="decide decide--two">
<div class="decide__container">
	<h2 class="decide__title _title">цели устойчивого развития </h2>
	<div class="decide__inner">
		<div class="decide__content">
			<div class="decide__column-text">
				<p>
					 Предприятия-партнеры в своей деятельности придерживаются целей в области устойчивого развития, принятых Генеральной Ассамблеей ООН в 2015 году, и собственных корпоративных ценностей. Мы стремимся сохранить мир в первозданном виде, чтобы передать его будущим поколениям, внося свой вклад в решение экологических и социальных проблем для обеспечения устойчивого развития в регионах присутствия. В нашу деятельность интегрировано ответственное отношение к природе и следование принципам корпоративного управления.<br>
				</p>
			</div>
			<div class="decide__column-info info-decide info-decide--two" data-da=".decide__inner, 767, last">
				</div>
<!-- <div class="info-decide__content">
 <time datetime="2016-11-18T09:54" class="info-decide__date">22.09.2023</time>
					<h3 class="info-decide__title">Манифест устойчивого развития</h3>
				
 <a href="javascript:void(0);" class="info-decide__file" style="--icon:url(&quot;/local/templates/sgmk/assets/static/img/icons/13.svg&quot;)">Скачать</a>
			</div> -->
		</div>
		 <style>
.block {
    /* Стили блока */
    position: relative;
    
}

.block:hover {
  transform: scale(1.2); /* Увеличение блока при наведении */
}
.tooltip {
        visibility: hidden;
        width: 120px;
        background-color: #f7f7f7;
        color: #333;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s;
        font-size: 10px;
        max-width: 90%; /* Максимальная ширина тултипа не более 90% ширины экрана */
    right: auto; /* Сбрасываем свойство right */
    transform: translateX(-50%); /* Оставляем центрирование по оси X */
    }
	.img_bl {
		display: flex;
    	align-items: flex-end;
	}


            </style>
		<div class="purpose_blocks" style="display: flex; flex-wrap: wrap; font-family: heliosext; position: relative; height: 100%; width: 100%;">
			<div class="block block_1" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #102d8d; padding: 10px; transition: transform 0.3s; font-size: 14px; flex-direction: column; justify-content: space-between; align-items: flex-end;/* Добавляем плавное увеличение блока */;">
				 Хорошее здоровье и благополучие
				<div class="tooltip">
					 Хорошее здоровье и благополучие
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic1.png" height="70"><br>
				</div>
			</div>
			<div class="block block_2" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #3C82C8; padding: 10px; transition: transform 0.3s; font-size: 14px; flex-direction: column; justify-content: space-between; align-items: flex-end;">
				 Качественное образование
				<div class="tooltip">
					 Качественное образование
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic2.png" height="70"><br>
				</div>
			</div>
			<div class="block block_3" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #102d8d; padding: 10px; transition: transform 0.3s; font-size: 14px; flex-direction: column; justify-content: space-between; align-items: flex-end;">
				 Чистая вода и санитария
				<div class="tooltip">
					 Чистая вода и санитария
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic3.png" height="70"><br>
				</div>
			</div>
			<div class="block block_4" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #3C82C8; padding: 10px; transition: transform 0.3s; font-size: 18px; flex-direction: column; justify-content: space-between; align-items: flex-end;">
				 Достойная работа и экономический рост
				<div class="tooltip">
					 Достойная работа и экономический рост
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic4.png" height="70"><br>
				</div>
			</div>
			<div class="block block_5" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #102d8d; padding: 10px; transition: transform 0.3s; font-size: 24px; flex-direction: column; justify-content: space-between; align-items: flex-end;"">
				 Борьба с изменением климата
				<div class="tooltip">
					 Борьба с изменением климата
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic5.png" height="70"><br>
				</div>
			</div>
			<div class="block block_6" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #3C82C8; padding: 10px; transition: transform 0.3s; font-size: 18px; flex-direction: column; justify-content: space-between; align-items: flex-end;"">
				 Сохранение экосистем суши
				<div class="tooltip">
					 Сохранение экосистем суши
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic6.png" height="70"><br>
				</div>
			</div>
			<div class="block block_7" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #102d8d; padding: 10px; transition: transform 0.3s; font-size: 14px; flex-direction: column; justify-content: space-between; align-items: flex-end;"">
				 Партнёрство в интересах устойчивого развития
				<div class="tooltip">
					 Партнёрство в интересах устойчивого развития
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic7.png" height="70"><br>
				</div>
			</div>
			<div class="block block_8" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #3C82C8; padding: 10px; transition: transform 0.3s; font-size: 18px; flex-direction: column; justify-content: space-between; align-items: flex-end;"">
				 Ответственное потребление и производство
				<div class="tooltip">
					 Ответственное потребление и производство
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic8.png" height="70"><br>
				</div>
			</div>
			<div class="block block_9" style="width: 100px; background-color: white; display: flex; margin: 7px; flex: 1 0 30%; background-color: #eeeeee; color: #102d8d; padding: 10px; transition: transform 0.3s; font-size: 14px; flex-direction: column; justify-content: space-between; align-items: flex-end;"">
				 Мир, правосудие и эффективные институты
				<div class="tooltip">
					 Мир, правосудие и эффективные институты
				</div>
				<div class="img_bl">
					<img class="img_1" width="70" src="/local/templates/sgmk/assets/static/img/icons/pic9.png" height="70"><br>
				</div>
			</div>
		</div>
		 <script>
document.querySelectorAll('.block').forEach((block) => {
    const tooltip = block.querySelector('.tooltip');
    const text = tooltip.innerText;
    const textLength = text.length;
    let isOpen = false;

    if (textLength > 20) {
        tooltip.style.width = '250px'; // Установка ширины тултипа в зависимости от длины текста
    } else {
        tooltip.style.width = '200px'; // Ширина по умолчанию, если текст короткий
    }

    block.addEventListener('click', () => {
        if (!isOpen) {
            tooltip.style.visibility = 'visible';
            tooltip.style.opacity = 1;
            isOpen = true;
        } else {
            tooltip.style.visibility = 'hidden';
            tooltip.style.opacity = 0;
            isOpen = false;
        }
    });

    block.addEventListener('mouseleave', () => {
        if (isOpen) {
            tooltip.style.visibility = 'hidden';
            tooltip.style.opacity = 0;
            isOpen = false;
        }
    });
});
            </script>
	</div>
</div>
 </section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"directions-development",
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
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "sustainability",
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
		"PROPERTY_CODE" => array("",""),
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
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"sustainability",
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
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "sustainability",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array("",""),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(""),
		"TOP_DEPTH" => "1"
	)
);?>
<? /* $APPLICATION->IncludeComponent(
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
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "sustainability",
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
);*/ ?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>