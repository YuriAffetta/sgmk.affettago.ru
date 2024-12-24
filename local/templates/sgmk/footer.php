<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

</main>
<footer class="footer">
	<div class="footer__container">
		<nav class="footer__menu">
			<div class="footer__item">
				<div class="footer__title">Компания</div>
				<ul class="footer__list">
					<li>
						<a href="/about/" class="footer__link">О компании</a>
					</li>
					<li>
						<a href="/business-directions/" class="footer__link">Направления бизнеса</a>
					</li>
					<li>
						<a href="/corporate-governance/" class="footer__link">Руководство</a>
					</li>
					<li>
						<a href="/contacts/" class="footer__link">Контакты</a>
					</li>
				</ul>
			</div>
			<div class="footer__item">
				<div class="footer__title">Клиентам</div>
				<ul class="footer__list">
					<li>
						<a href="/for-partners/" class="footer__link">Партнерам</a>
					</li>
					<li>
						<a href="/property-sales/" class="footer__link">Реализация неликвидов</a>
					</li>
				</ul>
				<a href="/sustainability/" class="footer__title" data-da=".footer__item:nth-child(3n),991,first">
					Устойчивое развитие
				</a>
			</div>
			<div class="footer__item">
				<div class="footer__title">Карьера</div>
				<ul class="footer__list">
					<li>
						<a href="/vacancies/" class="footer__link">Вакансии</a>
					</li>
					<?php /*
					<li>
						<a href="/vacancies/?arrFilterVacancies_23_1446970897=Y&set_filter=Y" class="footer__link">Производство</a>
					</li>
					<li>
						<a href="/vacancies/?arrFilterVacancies_23_2924030997=Y&set_filter=Y" class="footer__link">Офис</a>
					</li>
					<li>
						<a href="/vacancies/?arrFilterVacancies_23_2406624854=Y&set_filter=Y" class="footer__link">IT&Digital</a>
					</li>
                    */ ?>
				</ul>
			</div>
			<div class="footer__item">
				<div class="footer__title">Пресс-центр</div>
				<ul class="footer__list">
					<li>
						<a href="/news/" class="footer__link">Новости</a>
					</li>
				</ul>
				<a href="/catalog/" class="footer__title">Каталог продукции</a>
			</div>
		</nav>
		<div class="footer__bottom">
			<div class="footer__copy">АО «СГМК» © <?= date('Y'); ?></div>
			<a href="/privacy-policy/" class="footer__privacy">Политика конфиденциальности</a>
			<div class="footer__develop">Сделано в <a href="https://everest.cx/" target="_blank">everest</a></div>
		</div>
	</div>
</footer>
<div id="status-template" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close" style='--icon:url("../../static/img/icons/19.svg")'></button>
			<div class="popup__text">Произошла ошибка</div>
		</div>
	</div>
</div>
<div id="message-modal" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close" style='--icon:url("../../static/img/icons/19.svg")'></button>
			<h3 class="popup__title">Ваша заявка отправлена</h3>
			<div class="popup__text">Наш менеджер свяжется с вами в ближайшее время, по телефону, который вы указали в форме</div>
		</div>
	</div>
</div>
</div>

<?php // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/static/js/app.min.js'); ?>
<script src="<?= SITE_TEMPLATE_PATH; ?>/assets/static/js/app.min.js?v=2.1.8"></script>

<script>
	const menuElements = document.querySelectorAll('.menu__item');
	
	menuElements.forEach(element => {
		element.addEventListener('mouseover', () => {
			if (window.innerWidth >= 767 && document.querySelector('.menu__link.js-menu-item.active')) {
				document.querySelector('.menu__link.js-menu-item.active').classList.remove('active');
			}
		});
	});
</script>

</body>
</html>
