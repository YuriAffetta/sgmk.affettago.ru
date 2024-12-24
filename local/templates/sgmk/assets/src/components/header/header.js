import {
  _slideDown,
  _slideToggle,
  _slideUp,
  addClasses,
  menuClose,
  removeClasses,
  setAttr,
  toggleAttr,
  toggleClasses,
} from "../../js/files/functions.js";
// Прослушиваем событие прокрутки на окне
const header = document.querySelector(".header");
if (header) {
  if (window.scrollY > 0) {
    // Добавляем класс 'scrolled'
    header.classList.add("scrolled");
  } else {
    // Убираем класс 'scrolled', если пользователь прокрутил назад
    header.classList.remove("scrolled");
  }
  window.addEventListener("scroll", function () {
    // Получаем элемент шапки

    // Проверяем, была ли прокрутка больше 50 пикселей
    if (window.scrollY > 0) {
      // Добавляем класс 'scrolled'
      header.classList.add("scrolled");
    } else {
      // Убираем класс 'scrolled', если пользователь прокрутил назад
      header.classList.remove("scrolled");
    }
  });
}

const openSearch = document.querySelector(".js-open-search");
export const search = document.querySelector(".js-search");
const headerMenu = () => {
  const headerTabletPos = document.querySelector(".js-menu-position");
  document.addEventListener("click", (e) => {
    if (
      e.target.classList.contains("js-menu-item") &&
      window.innerWidth > 767 &&
      window.innerWidth < 1199
    ) {
      e.preventDefault();
      if (!e.target.classList.contains("active")) {
        removeClasses(
          [...document.querySelectorAll(".js-menu-item")],
          "active"
        );
        headerTabletPos.style.display = "block";

        addClasses([e.target, headerTabletPos], "active");
        const activeList = e.target.nextElementSibling;
        headerTabletPos.innerHTML = "";
        const clone = activeList.cloneNode(true);
        headerTabletPos.appendChild(clone);
        addClasses([clone], "active");

        _slideDown(clone, 500);
      } else {
        _slideUp(headerTabletPos.childNodes[0], 500);

        removeClasses([e.target, headerTabletPos], "active");
        setTimeout(() => {
          headerTabletPos.innerHTML = "";
          headerTabletPos.style.display = "none";
        }, 500);
      }
    } else if (
      e.target.classList.contains("js-menu-item") &&
      window.innerWidth < 767
    ) {
      e.preventDefault();

      const activeList = e.target.nextElementSibling;
      const activeOldItem = document.querySelector(".js-menu-item.active");
      const activeOldSublist = document.querySelector(".menu__sublist.active");

      if (e.target.classList.contains("active")) {
        // removeClasses([activeList], "active");
        _slideUp(activeList, 500);
        setTimeout(() => {
          removeClasses([activeList], "active");
        }, 500);
      } else {
        if (activeOldItem) {
          activeOldItem.classList.remove('active');
        }
        if (activeOldSublist) {
          _slideUp(activeOldSublist, 500);
          setTimeout(() => {
            activeOldSublist.classList.remove('active');
          }, 500);
        }
        
        addClasses([activeList], "active");
        _slideDown(activeList, 500);
      }
      toggleClasses([e.target], "active");
    } else if (e.target.classList.contains("js-menu-item")) {
      if (e.target.classList.contains("active")) {
        removeClasses([e.target], "active");
      } else {
        addClasses([e.target], "active");
      }
    }
  });
};
headerMenu();

export const toggleSearch = (isClose) => {
  if (isClose) {
    setAttr([openSearch], "aria-expanded", "false");
    removeClasses([search], "active");
  } else {
    toggleAttr([openSearch], "aria-expanded");
    toggleClasses([search], "active");
    menuClose();
  }
};
if (openSearch && search) {
  openSearch.addEventListener("click", (e) => {
    e.preventDefault();
    toggleSearch();
    toggleClasses([openSearch], "active");
  });
}
