/*
Документация слайдера: https://swiperjs.com/
*/
import Swiper from "swiper";
import { setAttr } from "./functions.js";
import {
  Navigation,
  A11y,
  Pagination,
  Autoplay,
  Grid,
  EffectCreative,
  EffectFade,
  Controller,
  Thumbs,
} from "swiper/modules";
/*
Navigation, Pagination, Autoplay, 
EffectFade, Lazy, Manipulation
*/

import "../../scss/base/swiper.scss";
// import "../../scss/libs/swiper.scss";
// import "swiper/css";

// Инициализация слайдеров
function initSliders() {
  // Список слайдеров
  // Проверяем, есть ли слайдер на странице
  if (document.querySelector(".swiper")) {
    // Указываем класс нужного слайдера
    // Создаем слайдер
    const sliderPartners = new Swiper(".js-slider-partners", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Navigation, A11y], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 0,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/

      /*
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			*/

      /*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

      navigation: {
        prevEl: ".partners__arrow--prev",
        nextEl: ".partners__arrow--next",
      },
      breakpoints: {
        320: {
          slidesPerView: 1.06,
          spaceBetween: 12,
        },
        640: {
          slidesPerView: 1.4,
          spaceBetween: 12,
        },
        768: {
          slidesPerView: 1.2,
          spaceBetween: 16,
        },
        992: {
          slidesPerView: 1.2,
          spaceBetween: 24,
        },

        1268: {
          slidesPerView: 1.2,
          spaceBetween: 24,
        },
      },
      on: {},
    });
    const heroSlider = new Swiper(".js-hero", {
      modules: [Pagination, A11y, Autoplay, EffectFade, EffectCreative], // A11y - обязательный модуль
      autoplay: {
        delay: 7000,
        disableOnInteraction: false,
      },
      // effect: "fade",
      observeParents: true,
      spaceBetween: 0,
      loop: true,
      speed: 2000,
      loopedSlides: 3,
      slideToClickedSlide: true,

      pagination: {
        el: ".hero__pag",
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },

        992: {
          slidesPerView: 1,
        },

        1199: {
          slidesPerView: 1.02,
        },
      },

      on: {
        transitionStart: function (swiper) {
          const slide = swiper.el.querySelector(".swiper-slide-prev");
          if (!slide) return;
          slide.classList.add("sliding");
          slide.style.marginLeft = "0px";
          setTimeout(() => {
            slide.classList.remove("sliding");
          }, 2000);
        },
        slideChangeTransitionStart: function (swiper) {
          this.params.simulateTouch = false;
          this.params.touchRatio = 0;

          setTimeout(() => {
            this.params.simulateTouch = true;
            this.params.touchRatio = 1;
          }, 2000);
        },
        resize: function (swiper) {
          const containers = swiper.el.querySelectorAll(".hero__container");
          let maxHeight = 0;

          // Перебираем все элементы и находим самый высокий
          containers.forEach((element) => {
            const elementHeight = element.scrollHeight + 150;
            if (elementHeight > maxHeight) {
              maxHeight = elementHeight; // Обновляем maxHeight, если элемент выше предыдущего
            }
          });
          swiper.el.setAttribute("style", `--hero-height: ${maxHeight}px;`);
        },
        init: function (swiper) {
          const containers = swiper.el.querySelectorAll(".hero__container");
          const { slides } = swiper;
          let maxHeight = 0;
          const slideNext = document.querySelectorAll(".hero__slide-next");
          if (slideNext.length > 0) {
            slideNext.forEach((element) => {
              if (window.innerWidth < 1199) return;
              element.addEventListener("click", function (e) {
                swiper.slideNext();
              });
              element.addEventListener("mouseenter", function (e) {
                const nextSlide = swiper.slides[swiper.activeIndex];
                nextSlide.style.marginLeft = "-50px";
              });
              element.addEventListener("mouseleave", function (e) {
                const nextSlide = swiper.slides[swiper.activeIndex];
                nextSlide.style.marginLeft = "0px";
              });
            });
            slides.forEach((element) => {
              element.addEventListener("mouseenter", function (e) {
                if (element.classList.contains("swiper-slide-next")) {
                  const nextSlide = swiper.slides[swiper.activeIndex];
                  nextSlide.style.marginLeft = "-50px";
                }
              });
              element.addEventListener("mouseleave", function (e) {
                if (element.classList.contains("swiper-slide-next")) {
                  const nextSlide = swiper.slides[swiper.activeIndex];
                  nextSlide.style.marginLeft = "0px";
                }
              });
            });
          }

          // Перебираем все элементы и находим самый высокий
          containers.forEach((element) => {
            const elementHeight = element.scrollHeight + 150;
            if (elementHeight > maxHeight) {
              maxHeight = elementHeight; // Обновляем maxHeight, если элемент выше предыдущего
            }
          });
          swiper.el.setAttribute("style", `--hero-height: ${maxHeight}px;`);
        },
      },
    });

    const sliderToday = new Swiper(".js-slider-today", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Navigation, A11y, Grid], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 0,
      autoHeight: false,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/

      /*
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			*/

      /*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

      navigation: {
        prevEl: ".today__arrow--prev",
        nextEl: ".today__arrow--next",
      },
      // slidesPerColumn: 2,
      // grid: {
      //   rows: 2,
      // },

      // slidesPerColumnFill: "row",
      // loop: false,
      breakpoints: {
        320: {
          slidesPerView: 1.33,
          spaceBetween: 12,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 12,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 16,
          grid: {
            rows: 2,
          },
        },
        992: {
          slidesPerView: "auto",
          spaceBetween: 16,
        },

        1268: {
          spaceBetween: 60,
          slidesPerView: "auto",
          // slidesPerColumn: 2,
          // grid: {
          //   rows: 2,
          // },
        },
      },
      on: {},
    });

    const sliderReliability = new Swiper(".js-slider-reliability", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Navigation, A11y, Grid], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 0,
      autoHeight: false,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/

      /*
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			*/

      /*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

      navigation: {
        prevEl: ".reliability__arrow--prev",
        nextEl: ".reliability__arrow--next",
      },
      // slidesPerColumn: 2,
      // grid: {
      //   rows: 2,
      // },

      // slidesPerColumnFill: "row",
      // loop: false,
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween: 12,
          grid: {
            rows: 2,
          },
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 12,
          grid: {
            rows: 2,
          },
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 16,
          grid: {
            rows: 2,
          },
        },
        992: {
          slidesPerView: "auto",
          spaceBetween: 16,
        },

        1268: {
          spaceBetween: 48,
          slidesPerView: "auto",
          // slidesPerColumn: 2,
          // grid: {
          //   rows: 2,
          // },
        },
      },
      on: {},
    });

    const sliderCatalog = new Swiper(".js-slider-catalog", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Pagination], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 0,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      loop: true,
      lazy: true,
      preloadImages: false,
      lazy: {
        loadOnTransitionStart: false,
        loadPrevNext: false,
      },

      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/

      pagination: {
        el: ".catalog__pagination",
        clickable: true,
        dynamicBullets: true,
      },

      /*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

      // navigation: {
      //   prevEl: ".partners__arrow--prev",
      //   nextEl: ".partners__arrow--next",
      // },
      // breakpoints: {
      //   320: {
      //     slidesPerView: 1.06,
      //     spaceBetween: 12,
      //   },
      //   640: {
      //     slidesPerView: 1.4,
      //     spaceBetween: 12,
      //   },
      //   768: {
      //     slidesPerView: 1.2,
      //     spaceBetween: 16,
      //   },
      //   992: {
      //     slidesPerView: 1.2,
      //     spaceBetween: 24,
      //   },

      //   1268: {
      //     slidesPerView: 1.2,
      //     spaceBetween: 24,
      //   },
      // },
      on: {},
    });

    const sliderContribution = new Swiper(".js-slider-contribution", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Navigation, A11y, Controller], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 0,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
      effect: 'fade',
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      */

      /*
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      */

      /*
      scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
      },
      */

      // navigation: {
      //   prevEl: ".partners__arrow--prev",
      //   nextEl: ".partners__arrow--next",
      // },
      breakpoints: {
        320: {
          slidesPerView: 1.004,
          spaceBetween: 12,
        },
        640: {
          slidesPerView: 1.4,
          spaceBetween: 12,
        },
        768: {
          slidesPerView: 1.2,
          spaceBetween: 16,
        },
        992: {
          slidesPerView: 1.2,
          spaceBetween: 24,
        },

        1268: {
          slidesPerView: 1,
          spaceBetween: 24,
        },
      },
      on: {},
    });

    const sliderPhotos = new Swiper(".js-slider-photos", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Navigation, A11y, Controller], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: 1.2,
      spaceBetween: 24,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
      effect: 'fade',
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      */

      /*
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      */

      /*
      scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
      },
      */

      navigation: {
        prevEl: ".contribution__arrow--prev",
        nextEl: ".contribution__arrow--next",
      },
      breakpoints: {
        320: {
          slidesPerView: 1.004,
          spaceBetween: 12,
        },
        640: {
          slidesPerView: 1.4,
          spaceBetween: 12,
        },
        768: {
          slidesPerView: 1.2,
          spaceBetween: 16,
        },
        992: {
          slidesPerView: 1.2,
          spaceBetween: 24,
        },

        1268: {
          // slidesPerView: 1,
          slidesPerView: 1.2,
          spaceBetween: 24,
        },
      },
      on: {},
    });

    sliderContribution.controller.control = sliderPhotos;
    sliderPhotos.controller.control = sliderContribution;

    const sliderCertificate = new Swiper(".js-slider-certificate", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Navigation, A11y], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: "auto",
      spaceBetween: 0,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
      effect: 'fade',
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      */

      /*
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      */

      /*
      scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
      },
      */

      navigation: {
        prevEl: ".certificate__arrow--prev",
        nextEl: ".certificate__arrow--next",
      },
      breakpoints: {
        320: {
          slidesPerView: "auto",
          spaceBetween: 12,
        },
        640: {
          slidesPerView: "auto",
          spaceBetween: 12,
        },
        768: {
          slidesPerView: "auto",
          spaceBetween: 16,
        },
        992: {
          slidesPerView: "auto",
          spaceBetween: 24,
        },

        1268: {
          slidesPerView: "auto",
          spaceBetween: 24,
        },
      },
      on: {},
    });

    const sliderEcology = new Swiper(".js-slider-ecology", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Navigation, A11y], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: "auto",
      spaceBetween: 0,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
      effect: 'fade',
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      */

      /*
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      */

      /*
      scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
      },
      */

      navigation: {
        prevEl: ".ecology__arrow--prev",
        nextEl: ".ecology__arrow--next",
      },
      breakpoints: {
        320: {
          slidesPerView: "auto",
          spaceBetween: 12,
        },
        640: {
          slidesPerView: "auto",
          spaceBetween: 12,
        },
        768: {
          slidesPerView: "auto",
          spaceBetween: 16,
        },
        992: {
          slidesPerView: "auto",
          spaceBetween: 24,
        },

        1268: {
          slidesPerView: "auto",
          spaceBetween: 24,
        },
      },
      on: {},
    });
    const sliderInfo = new Swiper(".js-slider-info", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [A11y, Thumbs], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 20,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/

      /*
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			*/

      /*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/
      thumbs: {
        swiper: {
          el: ".js-slider-year",
          slidesPerView: "auto",
          spaceBetween: 12,
          // breakpoints: {
          //   320: {
          //     slidesPerView: 2.45,
          //     spaceBetween: 12,
          //   },
          //   640: {
          //     slidesPerView: 3.2,
          //     spaceBetween: 12,
          //   },
          //   767: {
          //     slidesPerView: 4,
          //     spaceBetween: 12,
          //   },
          //   // 768: {
          //   //   slidesPerView: 4,
          //   //   spaceBetween: 0,
          //   // },
          //   // 992: {
          //   //   slidesPerView: 4,
          //   //   spaceBetween: 0,
          //   // },
          //   // 1550: {
          //   //   slidesPerView: 4,
          //   //   spaceBetween: 0,
          //   // },
          // },
        },
      },
      on: {},
    });
    const sliderYear = new Swiper(".js-slider-year", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [A11y, Thumbs], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: "auto",
      spaceBetween: 0,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/

      /*
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			*/

      /*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

      breakpoints: {
        320: {
          // slidesPerView: 4,
          slidesPerView: "auto",
          spaceBetween: 16,
        },
        640: {
          slidesPerView: "auto",
          spaceBetween: 16,
        },
        768: {
          slidesPerView: 6,
          spaceBetween: 10,
        },
        992: {
          slidesPerView: 6,
          spaceBetween: 24,
        },

        1268: {
          slidesPerView: 6,
          spaceBetween: 105,
        },
      },
      on: {},
    });

    const sliderCompany = new Swiper(".js-slider-company", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [A11y, Pagination], // A11y - обязательный модуль
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 0,
      //autoHeight: true,
      speed: 800,
      //touchRatio: 0,
      //simulateTouch: false,
      //loop: true,
      //preloadImages: false,
      //lazy: true,

      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/
      nested: true,
      pagination: {
        el: ".story__info-pagging",
        clickable: true,
      },

      breakpoints: {
        320: {
          slidesPerView: "auto",
          spaceBetween: 12,
        },
        640: {
          slidesPerView: "auto",
          spaceBetween: 16,
        },
        768: {
          slidesPerView: "auto",
          spaceBetween: 16,
        },
        992: {
          slidesPerView: 1,
          spaceBetween: 10,
        },

        1268: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
      },
      /*
			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},
			*/

      on: {},
    });
    let sliderBanner = null;
    function initSlider() {
      sliderBanner = new Swiper(".js-slider-produce", {
        // Вказуємо склас потрібного слайдера
        // Підключаємо модулі слайдера
        // для конкретного випадку
        modules: [Navigation],
        observer: true,
        observeParents: true,
        // slidesPerView: "auto",
        spaceBetween: 15,
        // autoHeight: true,
        speed: 800,
        // centeredSlides: true,
        // initialSlide: 1,
        //touchRatio: 0,
        //simulateTouch: false,
        //loop: true,
        //preloadImages: false,
        //lazy: true,

        /*
        // Ефекти
        effect: 'fade',
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        */

        // Пагінація
        /*
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        */

        // Скроллбар
        /*
        scrollbar: {
          el: '.swiper-scrollbar',
          draggable: true,
        },
        */

        // Кнопки "вліво/вправо"
        // navigation: {
        //   prevEl: ".opening__tabs-arrow--prev",
        //   nextEl: ".opening__tabs-arrow--next",
        // },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 12,
          },
          480: {
            slidesPerView: 1.5,
            spaceBetween: 12,
          },
          768: {
            slidesPerView: 1.2,
            spaceBetween: 16,
          },

          992: {
            slidesPerView: 1.2,
            spaceBetween: 16,
          },
        },
        // Події
        on: {},
      });
    }

    function destroySlider() {
      if (sliderBanner !== null) {
        sliderBanner.destroy();
        sliderBanner = null;
      }
    }

    function handleResize() {
      const sliderBannerElement = document.querySelector(".js-slider-produce");
      if (window.innerWidth < 992 && sliderBannerElement !== null) {
        if (sliderBanner === null) {
          initSlider();
        }
      } else {
        destroySlider();
      }
    }

    // Инициализация слайдера при загрузке страницы
    handleResize();

    // Обработчик события изменения размера окна
    window.addEventListener("resize", handleResize);
  }
}

// Скролл на базе слайдера (по классу swiper scroll для оболочки слайдера)
function initSlidersScroll() {
  let sliderScrollItems = document.querySelectorAll(".swiper_scroll");
  if (sliderScrollItems.length > 0) {
    for (let index = 0; index < sliderScrollItems.length; index++) {
      const sliderScrollItem = sliderScrollItems[index];
      const sliderScrollBar =
        sliderScrollItem.querySelector(".swiper-scrollbar");
      const sliderScroll = new Swiper(sliderScrollItem, {
        observer: true,
        observeParents: true,
        direction: "vertical",
        slidesPerView: "auto",
        freeMode: {
          enabled: true,
        },
        scrollbar: {
          el: sliderScrollBar,
          draggable: true,
          snapOnRelease: false,
        },
        mousewheel: {
          releaseOnEdges: true,
        },
      });
      sliderScroll.scrollbar.updateSize();
    }
  }
}

window.addEventListener("DOMContentLoaded", function (e) {
  initSliders();
  //initSlidersScroll();
});

// Бинд слайдеров на window для беков
window.initSliders = initSliders;
