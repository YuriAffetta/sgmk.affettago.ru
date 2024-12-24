// Підключення функціоналу "Чертоги Фрілансера"
// Підключення списку активних модулів
import { flsModules } from '../modules.js';
// Допоміжні функції
import {
	isMobile,
	_slideUp,
	_slideDown,
	_slideToggle,
	FLS,
	addClasses,
	setAttr,
} from '../functions.js';
// Модуль прокручування до блоку
import api from '../api.js';
import 'inputmask/dist/inputmask.min.js';
import { bitrixComponent } from "./bitrix-component.js";

//================================================================================================================================================================================================================================================================================================================================

/*
 */

export function formFieldsInit(
	options = { viewPass: false, autoHeight: false }
) {
	document.body.addEventListener('focusin', function (e) {
		const targetElement = e.target;
		if (
			targetElement.tagName === 'INPUT' ||
			targetElement.tagName === 'TEXTAREA'
		) {
			if (!targetElement.hasAttribute('data-no-focus-classes')) {
				targetElement.classList.add('_form-focus');
				targetElement.parentElement.classList.add('_form-focus');
			}
			formValidate.removeError(targetElement);
			targetElement.hasAttribute('data-validate')
				? formValidate.removeError(targetElement)
				: null;
		}
	});
	document.body.addEventListener('focusout', function (e) {
		const targetElement = e.target;
		if (
			targetElement.tagName === 'INPUT' ||
			targetElement.tagName === 'TEXTAREA'
		) {
			if (!targetElement.hasAttribute('data-no-focus-classes')) {
				targetElement.classList.remove('_form-focus');
				targetElement.parentElement.classList.remove('_form-focus');
			}
			// Миттєва валідація
			targetElement.hasAttribute('data-validate')
				? formValidate.validateInput(targetElement)
				: null;
		}
	});
	// Якщо увімкнено, додаємо функціонал "Показати пароль"
	if (options.viewPass) {
		document.addEventListener('click', function (e) {
			let targetElement = e.target;
			if (targetElement.closest('[class*="__viewpass"]')) {
				let inputType = targetElement.classList.contains('_viewpass-active')
					? 'password'
					: 'text';
				targetElement.parentElement
					.querySelector('input')
					.setAttribute('type', inputType);
				targetElement.classList.toggle('_viewpass-active');
			}
		});
	}
	// Якщо увімкнено, додаємо функціонал "Автовисота"
	if (options.autoHeight) {
		const textareas = document.querySelectorAll('textarea[data-autoheight]');
		if (textareas.length) {
			textareas.forEach((textarea) => {
				const startHeight = textarea.hasAttribute('data-autoheight-min')
					? Number(textarea.dataset.autoheightMin)
					: Number(textarea.offsetHeight);
				const maxHeight = textarea.hasAttribute('data-autoheight-max')
					? Number(textarea.dataset.autoheightMax)
					: Infinity;
				setHeight(textarea, Math.min(startHeight, maxHeight));
				textarea.addEventListener('input', () => {
					if (textarea.scrollHeight > startHeight) {
						textarea.style.height = `auto`;
						setHeight(
							textarea,
							Math.min(Math.max(textarea.scrollHeight, startHeight), maxHeight)
						);
					}
				});
			});
			
			function setHeight(textarea, height) {
				textarea.style.height = `${ height }px`;
			}
		}
	}
}

export let formValidate = {
	getErrors(form) {
		let error = 0;
		let formRequiredItems = form.querySelectorAll('*[data-required]');
		if (formRequiredItems.length) {
			formRequiredItems.forEach((formRequiredItem) => {
				if (
					(formRequiredItem.offsetParent !== null ||
						formRequiredItem.tagName === 'SELECT') &&
					!formRequiredItem.disabled
				) {
					error += this.validateInput(formRequiredItem);
				}
			});
		}
		return error;
	},
	validateInput(formRequiredItem) {
		let error = 0;
		if (formRequiredItem.dataset.required === 'email') {
			formRequiredItem.value = formRequiredItem.value.replace(' ', '');
			if (this.emailTest(formRequiredItem)) {
				this.addError(formRequiredItem);
				error++;
			} else {
				this.removeError(formRequiredItem);
			}
		} else if (formRequiredItem.dataset.required === 'tel') {
			if (!this.phoneTest(formRequiredItem)) {
				this.addError(formRequiredItem);
				error++;
			} else {
				this.removeError(formRequiredItem);
			}
		} else if (
			formRequiredItem.type === 'checkbox' &&
			!formRequiredItem.checked
		) {
			this.addError(formRequiredItem);
			error++;
		} else {
			if (!formRequiredItem.value.trim()) {
				this.addError(formRequiredItem);
				error++;
			} else {
				this.removeError(formRequiredItem);
			}
		}
		return error;
	},
	addError(formRequiredItem) {
		formRequiredItem.classList.add('_form-error');
		formRequiredItem.parentElement.classList.add('_form-error');
		let inputError =
			formRequiredItem.parentElement.querySelector('.form__error');
		if (inputError) formRequiredItem.parentElement.removeChild(inputError);
		if (formRequiredItem.dataset.error) {
			formRequiredItem.parentElement.insertAdjacentHTML(
				'beforeend',
				`<div class="form__error">${ formRequiredItem.dataset.error }</div>`
			);
		}
	},
	removeError(formRequiredItem) {
		formRequiredItem.classList.remove('_form-error');
		formRequiredItem.parentElement.classList.remove('_form-error');
		if (formRequiredItem.parentElement.querySelector('.form__error')) {
			formRequiredItem.parentElement.removeChild(
				formRequiredItem.parentElement.querySelector('.form__error')
			);
		}
	},
	formClean(form) {
		form.reset();
		setTimeout(() => {
			let inputs = form.querySelectorAll('input,textarea');
			for (let index = 0; index < inputs.length; index++) {
				const el = inputs[index];
				el.parentElement.classList.remove('_form-focus');
				el.classList.remove('_form-focus');
				formValidate.removeError(el);
			}
			let checkboxes = form.querySelectorAll('.checkbox__input');
			if (checkboxes.length > 0) {
				for (let index = 0; index < checkboxes.length; index++) {
					const checkbox = checkboxes[index];
					checkbox.checked = false;
				}
			}
			if (flsModules.select) {
				let selects = form.querySelectorAll('.select');
				if (selects.length) {
					for (let index = 0; index < selects.length; index++) {
						const select = selects[index].querySelector('select');
						flsModules.select.selectBuild(select);
					}
				}
			}
		}, 0);
	},
	emailTest(formRequiredItem) {
		return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(
			formRequiredItem.value
		);
	},
	phoneTest(formRequiredItem) {
		const phoneNumberPattern = /^\+7 \([1-9]\d{2}\) [1-9]\d{2}-[1-9]\d{3}$/;
		return phoneNumberPattern.test(formRequiredItem.value);
	},
};

export const initMask = () => {
	const telInputs = document.querySelectorAll('input[type="tel"]');
	if (telInputs) {
		telInputs.forEach((input) => {
			const mask = '+7 (999) 999-9999';
			Inputmask({ mask, showMaskOnHover: false }).mask(input);
			
			input.addEventListener('paste', function (event) {
				event.preventDefault();
				const clipboardData = event.clipboardData || window.clipboardData;
				const pastedData = clipboardData.getData('text');
				
				let processedValue = pastedData.replace(/\+7|8/, ''); // удалить "+7" или "8"
				input.value = processedValue;
			});
		});
	}
};

/* Модуль формы "количество" */
export function formSubmit() {
	const forms = document.forms;
	let executed = false;
	if (forms.length) {
		for (const form of forms) {
			form.addEventListener('submit', function (e) {
				const form = e.target;
				formSubmitAction(form, e);
			});
			form.addEventListener('reset', function (e) {
				const form = e.target;
				formValidate.formClean(form);
			});
		}
	}
	
	async function formSubmitAction(form, e) {
		const error = !form.hasAttribute('data-no-validate')
			? formValidate.getErrors(form)
			: 0;
		
		if (error === 0) {
			const ajax = form.hasAttribute('data-ajax');
			
			if (ajax && !executed) {
				executed = true;
				e.preventDefault();
				const formAction = form.getAttribute('action')
					? form.getAttribute('action').trim()
					: '#';
				const formMethod = form.getAttribute('method')
					? form.getAttribute('method').trim()
					: 'GET';
				const formData = new FormData(form);
				const action = formData.get('action');
				
				form.classList.add('_sending');
				
				if (formMethod === 'GET') {
					await api.load({
						url: formAction,
						method: formMethod,
						format: 'text',
						cb: (response) => {
							formSent(form, response);
						},
					});
				} else {
					if (action) {
						bitrixComponent('sgmk:forms', String(action), formData).then(
							(response) => {
								formSent(form, response);
							}
						);
					} else {
						await api.upload({
							url: formAction,
							body: formData,
							boolean: true,
							cb: (response) => {
								formSent(form, response);
							},
						});
					}
				}
				
				setTimeout(() => {
					executed = false;
				}, 3000);
			}
		} else {
			e.preventDefault();
			
			if (
				form.querySelector('._form-error') &&
				form.hasAttribute('data-goto-error')
			) {
				const formGoToErrorClass = form.dataset.gotoError
					? form.dataset.gotoError
					: '._form-error';
			}
		}
	}
	
	function formSent(form, responseResult = ``) {
		document.dispatchEvent(
			new CustomEvent('formSent', {
				detail: {
					form: form,
				},
			})
		);
		
		setTimeout(() => {
			if (flsModules.popup) {
				const popupSelector = form.dataset.popupMessage;
				const activeModal = document.querySelector('.popup_show');
				if (activeModal) {
					flsModules.popup.close(activeModal, 100);
				}
				const popup = document.querySelector(popupSelector);
				if (popup) {
					setTimeout(() => {
						flsModules.popup.open(popupSelector);
					}, 110);
				} else {
					const parser = new DOMParser();
					const response = parser.parseFromString(responseResult, 'text/html');
					const el = response.body.querySelector(popupSelector);
					document.body.appendChild(el);
					setTimeout(() => {
						flsModules.popup.open(popupSelector);
					}, 110);
				}
			}
		}, 0);
		// Очищуємо форму
		formValidate.formClean(form);
		// Повідомляємо до консолі
	}
	
	function formLogging(message) {
		FLS(`[Формы]: ${ message }`);
	}
}

/* Модуль формы "количество" */
export function formQuantity() {
	document.addEventListener('click', function (e) {
		let targetElement = e.target;
		if (
			targetElement.closest('[data-quantity-plus]') ||
			targetElement.closest('[data-quantity-minus]')
		) {
			const valueElement = targetElement
				.closest('[data-quantity]')
				.querySelector('[data-quantity-value]');
			let value = parseInt(valueElement.value);
			if (targetElement.hasAttribute('data-quantity-plus')) {
				value++;
				if (
					+valueElement.dataset.quantityMax &&
					+valueElement.dataset.quantityMax < value
				) {
					value = valueElement.dataset.quantityMax;
				}
			} else {
				--value;
				if (+valueElement.dataset.quantityMin) {
					if (+valueElement.dataset.quantityMin > value) {
						value = valueElement.dataset.quantityMin;
					}
				} else if (value < 1) {
					value = 1;
				}
			}
			targetElement
				.closest('[data-quantity]')
				.querySelector('[data-quantity-value]').value = value;
		}
	});
}

/* Модуль звездного рейтинга */
export function formRating() {
	const ratings = document.querySelectorAll('.rating');
	if (ratings.length > 0) {
		initRatings();
	}
	
	// Основна функція
	function initRatings() {
		let ratingActive, ratingValue;
		// "Бігаємо" по всіх рейтингах на сторінці
		for (let index = 0; index < ratings.length; index++) {
			const rating = ratings[index];
			initRating(rating);
		}
		
		// Ініціалізуємо конкретний рейтинг
		function initRating(rating) {
			initRatingVars(rating);
			
			setRatingActiveWidth();
			
			if (rating.classList.contains('rating_set')) {
				setRating(rating);
			}
		}
		
		// Ініціалізація змінних
		function initRatingVars(rating) {
			ratingActive = rating.querySelector('.rating__active');
			ratingValue = rating.querySelector('.rating__value');
		}
		
		// Змінюємо ширину активних зірок
		function setRatingActiveWidth(index = ratingValue.innerHTML) {
			const ratingActiveWidth = index / 0.05;
			ratingActive.style.width = `${ ratingActiveWidth }%`;
		}
		
		// Можливість вказати оцінку
		function setRating(rating) {
			const ratingItems = rating.querySelectorAll('.rating__item');
			for (let index = 0; index < ratingItems.length; index++) {
				const ratingItem = ratingItems[index];
				ratingItem.addEventListener('mouseenter', function (e) {
					// Оновлення змінних
					initRatingVars(rating);
					// Оновлення активних зірок
					setRatingActiveWidth(ratingItem.value);
				});
				ratingItem.addEventListener('mouseleave', function (e) {
					// Оновлення активних зірок
					setRatingActiveWidth();
				});
				ratingItem.addEventListener('click', function (e) {
					// Оновлення змінних
					initRatingVars(rating);
					
					if (rating.dataset.ajax) {
						// "Надіслати" на сервер
						setRatingValue(ratingItem.value, rating);
					} else {
						// Відобразити вказану оцінку
						ratingValue.innerHTML = index + 1;
						setRatingActiveWidth();
					}
				});
			}
		}
		
		async function setRatingValue(value, rating) {
			if (!rating.classList.contains('rating_sending')) {
				rating.classList.add('rating_sending');
				
				// Надсилання даних (value) на сервер
				let response = await fetch('rating.json', {
					method: 'GET',
					
					//body: JSON.stringify({
					//	userRating: value
					//}),
					//headers: {
					//	'content-type': 'application/json'
					//}
				});
				if (response.ok) {
					const result = await response.json();
					
					// Отримуємо новий рейтинг
					const newRating = result.newRating;
					
					// Виведення нового середнього результату
					ratingValue.innerHTML = newRating;
					
					// Оновлення активних зірок
					setRatingActiveWidth();
					
					rating.classList.remove('rating_sending');
				} else {
					alert('Помилка');
					
					rating.classList.remove('rating_sending');
				}
			}
		}
	}
}

export const createFiles = () => {
	const input = document.querySelectorAll('input[type="file"]');
	if (input.length > 0) {
		input.forEach((item) => {
			if (item.classList.contains('init')) return;
			addClasses([item], 'init');
			item.addEventListener('change', (event) => {
				const file = event.target.files[0]; // Получаем файл
				const fileList = event.target.parentElement;
				if (fileList.querySelector('.file-block')) {
					fileList.querySelector('.file-block').remove();
				}
				if (file.size <= 10 * 1024 * 1024) {
					// Проверяем размер файла (10 МБ)
					const fileBlock = document.createElement('div'); // Создаем блок для файла
					fileBlock.className = 'file-block';
					
					const fileName = document.createElement('span'); // Элемент для названия файла
					fileName.textContent = file.name;
					fileBlock.appendChild(fileName);
					
					const removeButton = document.createElement('span'); // Кнопка удаления
					setAttr([removeButton], 'aria-label', 'Удалить файл');
					addClasses([removeButton], 'file-block__remove');
					removeButton.onclick = function () {
						fileList.removeChild(fileBlock); // Удаление блока
					};
					fileBlock.appendChild(removeButton);
					
					fileList.appendChild(fileBlock); // Добавляем блок в DOM
				} else {
					alert(
						'Файл слишком большой! Размер файла должен быть не более 10 МБ.'
					);
				}
				
				// Очистка input после обработки, чтобы можно было загрузить тот же файл снова
				// event.target.value = '';
			});
		});
	}
};
createFiles();
