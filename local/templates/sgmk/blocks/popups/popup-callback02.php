<div id="callback-modal02" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close" style='--icon:url("../../static/img/icons/19.svg")'></button>
			<h3 class="popup__title">Отклик на вакансию <br></h3>
			<div class="popup__text">Заполните форму и приложите ваше резюме. Мы обязательно рассмотрим вашу кандидатуру.
			</div>
			<form method="POST" enctype="multipart/form-data" class="popup__form form" data-ajax data-popup-message="#message-modal">
				<input type="hidden" name="action" value="vacancy">
				<input type="hidden" name="vacancy" value="<?= $_SERVER['HTTP_REFERER']; ?>">
				<div class="form__items">
					<div class="form__item">
						<div class="form__item-title">ФИО <span>*</span></div>
						<div class="form__item-input">
							<input autocomplete="off" type="text" name="name" data-error="Ошибка" placeholder="Укажите ваше ФИО" class="input" data-validate data-required>
						</div>
					</div>
					<div class="form__item">
						<div class="form__item-title">Электронная почта <span>*</span></div>
						<div class="form__item-input">
							<input autocomplete="off" type="text" name="email" data-error="Ошибка" placeholder="example@mail.ru" class="input" data-validate data-required="email">
						</div>
					</div>
					<div class="form__item">
						<div class="form__item-title">Номер телефона<span>*</span></div>
						<div class="form__item-input">
							<input autocomplete="off" type="tel" name="phone" data-error="Ошибка" placeholder="+7 (9xx) xxx-xx-xx" class="input" data-validate data-required="tel">
						</div>
					</div>
					<div class="form__item">
						<div class="form__item-title">Реферальная программа</div>
						<div class="form__item-input">
							<input autocomplete="off" type="text" name="referral" data-error="Ошибка" placeholder="Напишите ФИО сотрудника, кто рассказал вам о вакансии" class="input">
						</div>
					</div>
					<div class="form__item">
						<div class="form__item-file">
							<input id="form-file" type="file" name="resume" data-error="Ошибка" placeholder="Напишите ФИО сотрудника, кто рассказал вам о вакансии" class="input">
							<div class="form__item-info" style='--icon:url("../../static/img/icons/20.svg")'>Прикрепите резюме </div>
							<div class="form__item-format">
								(формат
								PDF, JPG, JPEG, PNG)
							</div>
						</div>
					</div>
					<div class="form__item">
						<div class="form__item-title">Сопроводительный текст </div>
						<div class="form__item-textarea">
							<textarea class="input" name="comment" placeholder="Расскажите, почему вы хотите работать у нас" data-validate></textarea>
						</div>
					</div>
				</div>
				<button type="submit" class="form__btn btn">Отправить заявку</button>
			</form>
		</div>
	</div>
</div>
