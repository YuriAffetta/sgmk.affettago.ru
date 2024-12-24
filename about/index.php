<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("О компании");
$APPLICATION->SetPageProperty('show-banner', 'Y');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_after.php");
?>

<section class="home js-first">
	<div class='home__container'>
		<div class="home__inner">
			<div class="home__breadcrumb breadcrumb" style="--linkColor: #fff; --activeColor: #fff;">
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
			<h1 class="home__title home__title--three _title">
				<span>Ответственный подход</span> <br> к бизнесу и забота<br>  о людях и природе
			</h1>
		</div>
		<div class="home__img">
			<img src="/local/templates/sgmk/assets/static/img/home/05.jpeg" alt="">
		</div>
	</div>
</section>

<section class="decide decide--three js-area">
	<div class='decide__container'>
		<h2 class="decide__title decide__title--two _title">
			Мы придерживаемся <br> принципа <span>«Надо быть, <br> а не казаться»</span>
		</h2>
		<div class="decide__inner">
			<div class="decide__content">
				<h3 class="decide__column-title">Наша миссия</h3>
				<div class="decide__column-text">
					<p>
						Сделать мир вокруг себя лучше через нашу деятельность:<br>сохраняем ресурсы и даём уверенность.
					</p>
					<p>
						Главной целью компании является - <br>минимизация негативного воздействия на окружающую среду,<br>
						обеспечение
						благоприятных условий для жизни человека,<br>улучшение социально-экономической обстановки в районах<br>
						деятельности предприятий СГМК, достижение максимально высоких<br> показателей экологичности
						компании.
					</p>
				</div>
			
			</div>
			<div class="decide__image">
				<img src="/local/templates/sgmk/assets/static/img/decide/03.jpg" alt="" />
			</div>
		</div>
	</div>
</section>

<section class="contribution js-area">
	<div class='contribution__container'>
		<div class="contribution__top">
			<h2 class="contribution__title _title"><span>17 лет</span> стремимся <br> быть лучше</h2>
			<div class="contribution__slider swiper js-slider-contribution">
				<div class="contribution__swiper swiper-wrapper">
					<div class="contribution__slide swiper-slide">
						<div class="contribution__slide-title">
							Флагман Ломозаготовки
						</div>
						<div class="contribution__slide-text">
							За 17 лет работы компания зарекомендовала себя<br>надёжным партнёром с безупречной репутацией
						</div>
					</div>
					<div class="contribution__slide swiper-slide">
						<div class="contribution__slide-title">
							Производство полного цикла
						</div>
						<div class="contribution__slide-text">
							Сеть франчайзи СГМК. Занимается сбором и переработкой<br>отходов лома черных и цветных металлов
						</div>
					</div>
					<div class="contribution__slide swiper-slide">
						<div class="contribution__slide-title">
							Производство полного цикла
						</div>
						<div class="contribution__slide-text">
							Единственный в России производитель<br>особо чистых премиальных видов ферросилиция.<br>Предприятие
							в
							контуре
							всех принципов ESG повестки,<br>использует технологии опережающего развития
						</div>
					</div>
				</div>
			</div>
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
					<button type="button"
					        class="contribution__arrow contribution__arrow--prev swiper__arrow swiper__arrow--prev"
					        style='--icon:url("/local/templates/sgmk/assets/static/img/icons/01.svg")'></button>
					<button type="button"
					        class="contribution__arrow contribution__arrow--next swiper__arrow swiper__arrow--next"
					        style='--icon:url("/local/templates/sgmk/assets/static/img/icons/02.svg")'></button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="planet planet--two" data-lp>
	<div class='js-planet'>
		<div class="planet__container">
			<h2 class="planet__title _title"><span>География</span>Присутствия</h2>
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

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
