import Tippy from "tippy.js";

const createTippy = async () => {
  const tipItems = document.querySelectorAll("[data-tip] ");

  if (!tipItems) return;

  tipItems.forEach((element, index) => {
    // eslint-disable-next-line no-new
    const parser = new DOMParser();
    const template = parser.parseFromString(element.dataset.tip, "text/html");

    // eslint-disable-next-line prefer-destructuring
    const content = template.body.children[0];
    // eslint-disable-next-line
    const tip = new Tippy(element, {
      // eslint-disable-next-line object-shorthand
      content: content,
      arrow: false,
      placement: "top",
      onShow(instance) {
        instance.reference.classList.add("active-tooltip");
        const circles = instance.reference.querySelectorAll("circle");
        circles.forEach((element) => {
          if (element.getAttribute("stroke") === "#112E8D") {
            element.setAttribute("stroke", "#F09D20");
          } else {
            // element.setAttribute("fill", "#112E8D");
          }
        });
        const circle = instance.reference
          .querySelector("circle")
          .cloneNode(true);

        circle.classList.add("active-tooltip__circle");
        circle.setAttribute("r", `${circle.getAttribute("r") * 1.9}`);
        circle.setAttribute("stroke", "#F09D20");
        circle.setAttribute("stroke-width", "2");
        circle.setAttribute("fill", "none");

        // Добавляем круг в SVG элемент, который активировал подсказку
        instance.reference.appendChild(circle);

        // Сохраняем ссылку на созданный круг в экземпляре подсказки
        instance._circle = circle;
      },
      onHide(instance) {
        instance.reference.classList.remove("active-tooltip");
        const circles = instance.reference.querySelectorAll("circle");
        circles.forEach((element) => {
          if (element.getAttribute("stroke") === "#F09D20") {
            element.setAttribute("stroke", "#112E8D");
          }
        });
        if (instance._circle) {
          instance._circle.parentNode.removeChild(instance._circle);
          delete instance._circle; // Удаляем ссылку на круг из экземпляра подсказки
        }
      },
    });
  });
};
createTippy();
