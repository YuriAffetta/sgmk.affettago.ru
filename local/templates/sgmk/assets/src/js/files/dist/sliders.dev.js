"use strict";

var _swiper = _interopRequireDefault(require("swiper"));

var _functions = require("./functions.js");

var _modules = require("swiper/modules");

require("../../scss/base/swiper.scss");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

// import "../../scss/libs/swiper.scss";
// import "swiper/css";
// Инициализация слайдеров
function initSliders() {
  // Список слайдеров
  // Проверяем, есть ли слайдер на странице
  if (document.querySelector(".swiper")) {
    var _ref;

    var initSlider = function initSlider() {
      sliderBanner = new _swiper["default"](".js-slider-produce", {
        // Вказуємо склас потрібного слайдера
        // Підключаємо модулі слайдера
        // для конкретного випадку
        modules: [_modules.Navigation],
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
            spaceBetween: 12
          },
          480: {
            slidesPerView: 1.5,
            spaceBetween: 12
          },
          768: {
            slidesPerView: 1.2,
            spaceBetween: 16
          },
          992: {
            slidesPerView: 1.2,
            spaceBetween: 16
          }
        },
        // Події
        on: {}
      });
    };

    var destroySlider = function destroySlider() {
      if (sliderBanner !== null) {
        sliderBanner.destroy();
        sliderBanner = null;
      }
    };

    var handleResize = function handleResize() {
      var sliderBannerElement = document.querySelector(".js-slider-produce");

      if (window.innerWidth < 992 && sliderBannerElement !== null) {
        if (sliderBanner === null) {
          initSlider();
        }
      } else {
        destroySlider();
      }
    }; // Инициализация слайдера при загрузке страницы


    // Указываем класс нужного слайдера
    // Создаем слайдер
    var sliderPartners = new _swiper["default"](".js-slider-partners", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.Navigation, _modules.A11y],
      // A11y - обязательный модуль
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
        nextEl: ".partners__arrow--next"
      },
      breakpoints: {
        320: {
          slidesPerView: 1.06,
          spaceBetween: 12
        },
        640: {
          slidesPerView: 1.4,
          spaceBetween: 12
        },
        768: {
          slidesPerView: 1.2,
          spaceBetween: 16
        },
        992: {
          slidesPerView: 1.2,
          spaceBetween: 24
        },
        1268: {
          slidesPerView: 1.2,
          spaceBetween: 24
        }
      },
      on: {}
    });
    var heroSlider = new _swiper["default"](".js-hero", {
      modules: [_modules.Pagination, _modules.A11y, _modules.Autoplay, _modules.EffectFade, _modules.EffectCreative],
      // A11y - обязательный модуль
      autoplay: {
        delay: 7000,
        disableOnInteraction: false
      },
      // effect: "fade",
      observeParents: true,
      spaceBetween: 0,
      loop: true,
      speed: 7000,
      loopedSlides: 3,
      slideToClickedSlide: true,
      pagination: {
        el: ".hero__pag",
        clickable: true
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        992: {
          slidesPerView: 1
        },
        1199: {
          slidesPerView: 1.02
        }
      },
      on: {
        transitionStart: function transitionStart(swiper) {
          var slide = swiper.el.querySelector(".swiper-slide-prev");
          if (!slide) return;
          slide.classList.add("sliding");
          setTimeout(function () {
            slide.classList.remove("sliding");
          }, 2000);
        },
        slideChangeTransitionStart: function slideChangeTransitionStart(swiper) {
          var _this = this;

          this.params.simulateTouch = false;
          this.params.touchRatio = 0;
          setTimeout(function () {
            _this.params.simulateTouch = true;
            _this.params.touchRatio = 1;
          }, 2000);
        },
        resize: function resize(swiper) {
          var containers = swiper.el.querySelectorAll(".hero__container");
          var maxHeight = 0; // Перебираем все элементы и находим самый высокий

          containers.forEach(function (element) {
            var elementHeight = element.scrollHeight + 155;

            if (elementHeight > maxHeight) {
              maxHeight = elementHeight; // Обновляем maxHeight, если элемент выше предыдущего
            }
          });
          swiper.el.setAttribute("style", "--hero-height: ".concat(maxHeight, "px;"));
        },
        init: function init(swiper) {
          var containers = swiper.el.querySelectorAll(".hero__container");
          var slides = swiper.slides;
          var maxHeight = 0;
          var slideNext = document.querySelectorAll(".hero__slide-next");

          if (slideNext.length > 0) {
            slideNext.forEach(function (element) {
              if (window.innerWidth < 1199) return;
              element.addEventListener("click", function (e) {
                swiper.slideNext();
              });
              element.addEventListener("mouseenter", function (e) {
                var nextSlide = swiper.slides[swiper.activeIndex];
                nextSlide.style.marginLeft = "-50px";
              });
              element.addEventListener("mouseleave", function (e) {
                var nextSlide = swiper.slides[swiper.activeIndex];
                nextSlide.style.marginLeft = "0px";
              });
            });
            slides.forEach(function (element) {
              element.addEventListener("mouseenter", function (e) {
                if (element.classList.contains("swiper-slide-next")) {
                  var nextSlide = swiper.slides[swiper.activeIndex];
                  nextSlide.style.marginLeft = "-50px";
                }
              });
              element.addEventListener("mouseleave", function (e) {
                if (element.classList.contains("swiper-slide-next")) {
                  var nextSlide = swiper.slides[swiper.activeIndex];
                  nextSlide.style.marginLeft = "0px";
                }
              });
            });
          } // Перебираем все элементы и находим самый высокий


          containers.forEach(function (element) {
            var elementHeight = element.scrollHeight + 155;

            if (elementHeight > maxHeight) {
              maxHeight = elementHeight; // Обновляем maxHeight, если элемент выше предыдущего
            }
          });
          swiper.el.setAttribute("style", "--hero-height: ".concat(maxHeight, "px;"));
        }
      }
    });
    var sliderToday = new _swiper["default"](".js-slider-today", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.Navigation, _modules.A11y, _modules.Grid],
      // A11y - обязательный модуль
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
        nextEl: ".today__arrow--next"
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
          spaceBetween: 12
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 12
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 16,
          grid: {
            rows: 2
          }
        },
        992: {
          slidesPerView: "auto",
          spaceBetween: 16
        },
        1268: {
          spaceBetween: 60,
          slidesPerView: "auto" // slidesPerColumn: 2,
          // grid: {
          //   rows: 2,
          // },

        }
      },
      on: {}
    });
    var sliderReliability = new _swiper["default"](".js-slider-reliability", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.Navigation, _modules.A11y, _modules.Grid],
      // A11y - обязательный модуль
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
        nextEl: ".reliability__arrow--next"
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
            rows: 2
          }
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 12,
          grid: {
            rows: 2
          }
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 16,
          grid: {
            rows: 2
          }
        },
        992: {
          slidesPerView: "auto",
          spaceBetween: 16
        },
        1268: {
          spaceBetween: 48,
          slidesPerView: "auto" // slidesPerColumn: 2,
          // grid: {
          //   rows: 2,
          // },

        }
      },
      on: {}
    });
    var sliderCatalog = new _swiper["default"](".js-slider-catalog", (_ref = {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.Pagination],
      // A11y - обязательный модуль
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
      preloadImages: false
    }, _defineProperty(_ref, "lazy", {
      loadOnTransitionStart: false,
      loadPrevNext: false
    }), _defineProperty(_ref, "pagination", {
      el: ".catalog__pagination",
      clickable: true,
      dynamicBullets: true
    }), _defineProperty(_ref, "on", {}), _ref));
    var sliderContribution = new _swiper["default"](".js-slider-contribution", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.Navigation, _modules.A11y, _modules.Controller],
      // A11y - обязательный модуль
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
          spaceBetween: 12
        },
        640: {
          slidesPerView: 1.4,
          spaceBetween: 12
        },
        768: {
          slidesPerView: 1.2,
          spaceBetween: 16
        },
        992: {
          slidesPerView: 1.2,
          spaceBetween: 24
        },
        1268: {
          slidesPerView: 1,
          spaceBetween: 24
        }
      },
      on: {}
    });
    var sliderPhotos = new _swiper["default"](".js-slider-photos", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.Navigation, _modules.A11y, _modules.Controller],
      // A11y - обязательный модуль
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
        nextEl: ".contribution__arrow--next"
      },
      breakpoints: {
        320: {
          slidesPerView: 1.004,
          spaceBetween: 12
        },
        640: {
          slidesPerView: 1.4,
          spaceBetween: 12
        },
        768: {
          slidesPerView: 1.2,
          spaceBetween: 16
        },
        992: {
          slidesPerView: 1.2,
          spaceBetween: 24
        },
        1268: {
          // slidesPerView: 1,
          slidesPerView: 1.2,
          spaceBetween: 24
        }
      },
      on: {}
    });
    sliderContribution.controller.control = sliderPhotos;
    sliderPhotos.controller.control = sliderContribution;
    var sliderCertificate = new _swiper["default"](".js-slider-certificate", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.Navigation, _modules.A11y],
      // A11y - обязательный модуль
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
        nextEl: ".certificate__arrow--next"
      },
      breakpoints: {
        320: {
          slidesPerView: "auto",
          spaceBetween: 12
        },
        640: {
          slidesPerView: "auto",
          spaceBetween: 12
        },
        768: {
          slidesPerView: "auto",
          spaceBetween: 16
        },
        992: {
          slidesPerView: "auto",
          spaceBetween: 24
        },
        1268: {
          slidesPerView: "auto",
          spaceBetween: 24
        }
      },
      on: {}
    });
    var sliderEcology = new _swiper["default"](".js-slider-ecology", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.Navigation, _modules.A11y],
      // A11y - обязательный модуль
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
        nextEl: ".ecology__arrow--next"
      },
      breakpoints: {
        320: {
          slidesPerView: "auto",
          spaceBetween: 12
        },
        640: {
          slidesPerView: "auto",
          spaceBetween: 12
        },
        768: {
          slidesPerView: "auto",
          spaceBetween: 16
        },
        992: {
          slidesPerView: "auto",
          spaceBetween: 24
        },
        1268: {
          slidesPerView: "auto",
          spaceBetween: 24
        }
      },
      on: {}
    });
    var sliderInfo = new _swiper["default"](".js-slider-info", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.A11y, _modules.Thumbs],
      // A11y - обязательный модуль
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
          spaceBetween: 12 // breakpoints: {
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

        }
      },
      on: {}
    });
    var sliderYear = new _swiper["default"](".js-slider-year", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.A11y, _modules.Thumbs],
      // A11y - обязательный модуль
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
          spaceBetween: 16
        },
        640: {
          slidesPerView: "auto",
          spaceBetween: 16
        },
        768: {
          slidesPerView: 6,
          spaceBetween: 10
        },
        992: {
          slidesPerView: 6,
          spaceBetween: 24
        },
        1268: {
          slidesPerView: 6,
          spaceBetween: 105
        }
      },
      on: {}
    });
    var sliderCompany = new _swiper["default"](".js-slider-company", {
      // Указываем класс нужного слайдера
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [_modules.A11y, _modules.Pagination],
      // A11y - обязательный модуль
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
        clickable: true
      },
      breakpoints: {
        320: {
          slidesPerView: "auto",
          spaceBetween: 12
        },
        640: {
          slidesPerView: "auto",
          spaceBetween: 16
        },
        768: {
          slidesPerView: "auto",
          spaceBetween: 16
        },
        992: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        1268: {
          slidesPerView: 1,
          spaceBetween: 10
        }
      },

      /*
      scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
      },
      */
      on: {}
    });
    var sliderBanner = null;
    handleResize(); // Обработчик события изменения размера окна

    window.addEventListener("resize", handleResize);
  }
} // Скролл на базе слайдера (по классу swiper scroll для оболочки слайдера)


function initSlidersScroll() {
  var sliderScrollItems = document.querySelectorAll(".swiper_scroll");

  if (sliderScrollItems.length > 0) {
    for (var index = 0; index < sliderScrollItems.length; index++) {
      var sliderScrollItem = sliderScrollItems[index];
      var sliderScrollBar = sliderScrollItem.querySelector(".swiper-scrollbar");
      var sliderScroll = new _swiper["default"](sliderScrollItem, {
        observer: true,
        observeParents: true,
        direction: "vertical",
        slidesPerView: "auto",
        freeMode: {
          enabled: true
        },
        scrollbar: {
          el: sliderScrollBar,
          draggable: true,
          snapOnRelease: false
        },
        mousewheel: {
          releaseOnEdges: true
        }
      });
      sliderScroll.scrollbar.updateSize();
    }
  }
}

window.addEventListener("dom", function (e) {
  initSliders(); //initSlidersScroll();
}); // Бинд слайдеров на window для беков

window.initSliders = initSliders;
