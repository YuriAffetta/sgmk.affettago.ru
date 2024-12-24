import {
  _slideDown,
  _slideToggle,
  _slideUp,
  addClasses,
  removeClasses,
  toggleClasses,
} from "./functions.js";
import { flsModules } from "./modules.js";

// Пример чанк импорта fslightbox
// export default async () => {
//   const el = document.querySelector("[data-fslightbox]");
//   if (!el) return;
//   await import(/* webpackChunkName: "fslightbox" */ "fslightbox");
//   window.FsLightbox();
// };
import fslightbox from "fslightbox";
const CreateFslightbox = async () => {
  const el = document.querySelector("[data-fslightbox]");
  if (!el) return;
  window.fslightbox();
};

export default CreateFslightbox;

// Пример чанк импорта для подключения модуля без названия
// export default async () => {
//   if (!tipItems) return;
//   const { default: Tippy } = await import(
//     /* webpackChunkName: "tippy" */ 'tippy.js'
//   );

// };

document.querySelectorAll(".catalog__column").forEach((column) => {
  const icon = column.querySelector(".js-certificate-icon");
  const text = column.querySelector(".certificate-catalog__text");

  if (icon) {
    icon.addEventListener("click", () => {
      text.classList.toggle("_active");
    });

    icon.addEventListener("mouseover", () => {
      text.classList.add("_active");
    });

    icon.addEventListener("mouseout", () => {
      text.classList.remove("_active");
    });
  }
});

// const filter = document.querySelector(".aside__filter");
// const form = document.querySelector(".aside__form");

// if (filter && form) {
//   filter.addEventListener("click", () => {
//     filter.classList.toggle("_active");
//     if (form.classList.contains("_active")) {
//       form.style.height = form.scrollHeight + "px";
//     } else {
//       form.style.height = form.scrollHeight + "px";
//       form.offsetHeight; // Trigger reflow to ensure transition on height change
//       form.style.height = 0;
//     }
//     form.classList.toggle("_active");
//   });
// }

/*
if (window.matchMedia("(max-width: 992px)").matches) {
  const filter = document.querySelector(".aside__filter");
  const form = document.querySelector(".aside__form");

  if (filter && form) {
    form.style.height = "0";
    form.style.overflow = "hidden";
    form.style.transition = "height 0.3s ease";

    filter.addEventListener("click", () => {
      filter.classList.toggle("_active");
      form.classList.toggle("_active");
      if (filter.classList.contains("_active")) {
        form.style.height = form.scrollHeight + "px";
        setTimeout(() => {
          form.style.height = "auto";
        }, 350);
      } else {
        form.style.height = form.scrollHeight + "px";
        form.style.height = "0";
      }
    });
  }
}
*/

/*
document.querySelectorAll(".form__fieldset-more").forEach((element) => {
  element.addEventListener("click", () => {
    console.log(element);
    console.log(element.previousElementSibling);
    element.classList.toggle("_active");
    let previousElement = element.previousElementSibling;
    if (previousElement) {
      previousElement.classList.toggle("_active");
    }
  });
});
*/
