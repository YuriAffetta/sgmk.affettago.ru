import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";

const createIntroAnim = async () => {
  if (window.innerWidth < 992) return;
  const heroSect = document.querySelector(".js-first");
  const paralaxSections = document.querySelectorAll(".js-paralax");
  const areas = document.querySelectorAll(".js-area");
  const cardsWrapper = document.querySelectorAll(".js-produce");

  gsap.registerPlugin(ScrollTrigger);
  // Зарегистрируйте ScrollTrigger, если вы еще этого не сделали

  // Создайте таймлайн с ScrollTrigger для анимации
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: heroSect, // Элемент, который будет отслеживаться при скролле
      start: "top bottom", // Старт анимации, когда верх блока у края экрана
      end: "bottom top", // Конец анимации, когда низ блока у края экрана
      scrub: true, // Плавная анимация вместе со скроллом
      // markers: true,    // Включите, если нужно визуально отладить точки старта и конца
    },
  });
  let arisaTl = [];

  areas.forEach((element) => {
    const finalPos = element.dataset.translate || 370;
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: element, // Элемент, который будет отслеживаться при скролле
        start: "top bottom", // Старт анимации, когда верх блока у края экрана
        end: "bottom top", // Конец анимации, когда низ блока у края экрана
        scrub: true, // Плавная анимация вместе со скроллом
        // markers: true,    // Включите, если нужно визуально отладить точки старта и конца
      },
    });
    tl.from(element, {
      y: "0%", // Начальное положение
      ease: "none",
    }).to(element, {
      y: finalPos, // Выберите значение, которое подходит для вашего эффекта
      ease: "none",
    });
    arisaTl.push(tl);
    element.addEventListener("click", (e) => {
      arisaTl.forEach((atl) => {
        setTimeout(() => {
          atl.scrollTrigger.refresh();
        }, 510);
      });
    });
  });

  paralaxSections.forEach((element) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: element, // Элемент, который будет отслеживаться при скролле
        start: "top bottom", // Старт анимации, когда верх блока у края экрана
        end: "bottom top", // Конец анимации, когда низ блока у края экрана
        scrub: true, // Плавная анимация вместе со скроллом
        // markers: true,    // Включите, если нужно визуально отладить точки старта и конца
      },
    });
    tl.from(element, {
      y: 0, // Начальное положение
      ease: "none",
    }).to(element, {
      y: 468, // Выберите значение, которое подходит для вашего эффекта
      ease: "none",
    });
  });

  // Настройте анимацию движения вверх для bottom-block
  tl.from(heroSect, {
    y: 0, // Начальное положение
    ease: "none",
  }).to(heroSect, {
    y: 468, // Выберите значение, которое подходит для вашего эффекта
    ease: "none",
  });
  gsap.registerPlugin(ScrollTrigger);

  if (cardsWrapper[0]) {
    if (window.matchMedia("(min-width: 1199px)").matches) {
      cardsWrapper.forEach((item) => {
        let cards = item.querySelectorAll(".js-produce-column");
        let stickDistance = 20;
        const header = item.querySelector(".js-produce-head");
        const topIdent = header ? header.clientHeight : 180;
        let firstCardST = ScrollTrigger.create({
          trigger: cards[0],
          start: "center center",
        });
        const end = cards.length > 2 ? 760 : 560;

        let lastCardST = ScrollTrigger.create({
          trigger: cards[cards.length - 1],
          start: `bottom ${end}`,
          opacity: 1,
        });

        cards.forEach((card, index) => {
          let opacityState;
          var scale = 1 - (cards.length - index) * 0.025;

          let scaleDown = gsap.to(card, {
            "transform-origin":
              '"50% ' + (lastCardST.start + stickDistance) + '"',
          });

          ScrollTrigger.create({
            trigger: card,
            start: `top top+=${topIdent + 100}`,
            end: () => lastCardST.start + stickDistance,
            pin: true,
            pinSpacing: false,
            ease: "power1.inOut",
            animation: scaleDown,
            scrub: true,
            toggleActions: "restart none none reverse",
          });
        });
      });
    }
  }

  const slides = document.querySelectorAll(".hero__paralax");
  if (slides.length) {
    slides.forEach((element) => {
      const image = element.querySelector("img");
      const containers = heroSect.querySelectorAll(
        ".hero__slide .hero__container"
      );
      const pagg = heroSect.querySelector(".hero__pag");
      const tl1 = gsap.timeline({
        scrollTrigger: {
          trigger: heroSect,
          start: "top+=20px center+=10px",
          end: "bottom center",
          scrub: true, // Задайте здесь числовое значение для более плавной анимации
          ease: "linear",
        },
      });
      tl1
        .from(image, {
          scale: 1, // масштабирование элемента в 2 раза
          y: 0, // Начальное положение
          ease: "linear", // Setting the easing to linear for consistent speed
        })
        .to(image, {
          scale: 1.4, // масштабирование элемента в 2 раза
          y: "-40%", // Начальное положение
          ease: "linear", // Setting the easing to linear for consistent speed
        });
      containers.forEach((container) => {
        console.log(container);
        const containerTimeline = gsap.timeline({
          scrollTrigger: {
            trigger: container,
            start: "top top+=100px",
            end: "bottom+=100px top+=100px", // Измените на "bottom bottom" для полного диапазона скролла
            scrub: 1,
            ease: "linear",
          },

          // scrollTrigger: {
          //   trigger: heroSect,
          //   start: "top+=20px top",
          //   end: "bottom center-=200px",
          //   scrub: 1, // Задайте здесь числовое значение для более плавной анимации
          //   ease: "linear",
          //   markers: true,
          // },
        });
        containerTimeline.to(container, {
          y: 380, // Конечное положение
          ease: "linear", // Задаем линейное изменение для равномерной скорости
        });

        const paggTimeline = gsap.timeline({
          scrollTrigger: {
            trigger: heroSect,
            start: "top top",
            end: "center+=100px center",
            scrub: 1, // Задайте здесь числовое значение для более плавной анимации
            ease: "linear",
          },
        });

        paggTimeline
          .from(pagg, {
            opacity: 1,
            ease: "linear",
          })
          .to(pagg, {
            opacity: 0,

            ease: "linear",
          });

        // containerTimeline
        //   .from(container, {
        //     y: 0,
        //     ease: "linear",
        //   })
        //   .to(container, {
        //     y: 480,
        //     ease: "linear",
        //   });
      });
    });
  }
};

createIntroAnim();
