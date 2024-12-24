"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _getRequireWildcardCache() { if (typeof WeakMap !== "function") return null; var cache = new WeakMap(); _getRequireWildcardCache = function _getRequireWildcardCache() { return cache; }; return cache; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } if (obj === null || _typeof(obj) !== "object" && typeof obj !== "function") { return { "default": obj }; } var cache = _getRequireWildcardCache(); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj["default"] = obj; if (cache) { cache.set(obj, newObj); } return newObj; }

var heroSect = document.querySelector(".js-first");

var createIntroAnim = function createIntroAnim() {
  var _ref, gsap, _ref2, ScrollTrigger, tl, cardsWrapper;

  return regeneratorRuntime.async(function createIntroAnim$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          if (heroSect) {
            _context.next = 2;
            break;
          }

          return _context.abrupt("return");

        case 2:
          _context.next = 4;
          return regeneratorRuntime.awrap(Promise.resolve().then(function () {
            return _interopRequireWildcard(require("gsap"));
          }));

        case 4:
          _ref = _context.sent;
          gsap = _ref["default"];
          _context.next = 8;
          return regeneratorRuntime.awrap(Promise.resolve().then(function () {
            return _interopRequireWildcard(require("gsap/ScrollTrigger.js"));
          }));

        case 8:
          _ref2 = _context.sent;
          ScrollTrigger = _ref2.ScrollTrigger;
          gsap.registerPlugin(ScrollTrigger);
          tl = gsap.timeline({
            scrollTrigger: {
              trigger: heroSect,
              start: "top bottom",
              end: "bottom top",
              scrub: true
            }
          });
          tl.from(heroSect, {
            y: 0,
            ease: "none"
          }).to(heroSect, {
            y: 500,
            ease: "none"
          });
          gsap.registerPlugin(ScrollTrigger);
          cardsWrapper = document.querySelectorAll(".js-produce");

          if (cardsWrapper) {
            if (window.matchMedia("(min-width: 1199px)").matches) {
              cardsWrapper.forEach(function (item) {
                var cards = item.querySelectorAll(".js-produce-column");
                var stickDistance = 20;
                var firstCardST = ScrollTrigger.create({
                  trigger: cards[0],
                  start: "center center"
                });
                var lastCardST = ScrollTrigger.create({
                  trigger: cards[cards.length - 1],
                  start: "bottom 760",
                  opacity: 1
                });
                cards.forEach(function (card, index) {
                  var opacityState;
                  var scale = 1 - (cards.length - index) * 0.025;
                  console.log(index, cards.length);

                  if (index === cards.length - 1) {
                    opacityState = 1;
                  } else {
                    opacityState = 0;
                  }

                  var scaleDown = gsap.to(card, {
                    scale: scale,
                    "transform-origin": '"50% ' + (lastCardST.start + stickDistance) + '"',
                    opacity: opacityState
                  });
                  ScrollTrigger.create({
                    trigger: card,
                    start: "top top+=180",
                    end: function end() {
                      return lastCardST.start + stickDistance;
                    },
                    pin: true,
                    pinSpacing: false,
                    ease: "none",
                    animation: scaleDown,
                    toggleActions: "restart none none reverse"
                  });
                });
              });
            }
          }

        case 16:
        case "end":
          return _context.stop();
      }
    }
  });
};

createIntroAnim();