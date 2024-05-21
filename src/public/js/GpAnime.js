/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/GpAnime.js ***!
  \*********************************/
var hero = document.querySelector(".hero");
var slider = document.querySelector(".slider");
var logo = document.querySelector("#logo");
var menu = document.querySelector(".menu");
var headline = document.querySelector(".headline");
var tl = gsap.timeline();
tl.fromTo(hero, 1, {
  height: "0"
}, {
  height: "80%",
  ease: Power2.easeInOut
}).fromTo(hero, 1.2, {
  width: "100%"
}, {
  width: "80%",
  ease: Power2.easeInOut
}).fromTo(slider, 1.2, {
  y: "-100%"
}, {
  y: "0%",
  ease: Power2.easeInOut
}, "-=1.2").fromTo(logo, 0.5, {
  opacity: 0,
  x: 30
}, {
  opacity: 1,
  x: 0
}, "-=0.5").fromTo(menu, 0.5, {
  opacity: 0,
  x: 30
}, {
  opacity: 1,
  x: 0
}, "-=0.5").fromTo(headline, 0.5, {
  opacity: 0,
  x: 0
}, {
  opacity: 1,
  x: 30
}, "-=0.5");
/******/ })()
;