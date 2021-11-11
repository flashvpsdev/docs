const btt = window.document.getElementById("backtotop");
const body = window.document.body; //IE 'quirks'
let doc = window.document?.documentElement; //IE with doctype
// const el = doc?.clientHeight ? doc : body;
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

  if (el.scrollTop > 200) {
    btt.classList.remove("hidden");
  } else {
    btt.classList.add("hidden");
  }
}
