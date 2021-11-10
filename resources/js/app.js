// @ts-check

import persist from "@alpinejs/persist";
import Alpine from "alpinejs";
Alpine.plugin(persist);

window.Alpine = Alpine;

Alpine.store("theme", {
  theme: Alpine.$persist("light"),

  /**
   * @param {any} theme
   */
  setTheme(theme) {
    this.theme = theme;
    document.body.setAttribute("data-theme", theme);
  },
});

Alpine.start();

const btt = window.document.getElementById("backtotop");
const body = window.document.body; //IE 'quirks'
let document = window.document.documentElement; //IE with doctype
// const el = document.clientHeight ? document : body;
const el = body;
toggleBackToTop(el, btt);
window.onscroll = function () {
  toggleBackToTop(el, btt);
};

/**
 * @param {HTMLElement} el
 * @param {HTMLElement} btt
 */
function toggleBackToTop(el, btt) {
  if (!btt) return;
  console.log(el.scrollTop);
  if (el.scrollTop > 200) {
    btt.classList.remove("hidden");
  } else {
    btt.classList.add("hidden");
  }
}

// document.addEventListener("DOMContentLoaded", function () {
//   var links = document.links;

//   console.log(links);

//   for (var i = 0, linksLength = links.length; i < linksLength; i++) {
//     if (links[i].hostname != window.location.hostname) {
//       links[i].target = "_blank";
//     }
//   }
// });
