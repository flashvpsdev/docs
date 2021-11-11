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

/**
 * Get videos on load
 */
getVideos();

/**
 * For each video player, create custom thumbnail or
 * use Youtube max resolution default thumbnail and create
 * iframe video.
 */
function getVideos() {
  var v = window.document.getElementsByClassName("youtube-player");
  for (var n = 0; n < v.length; n++) {
    var p = window.document.createElement("div");
    var id = v[n].getAttribute("data-id");

    var placeholder = v[n].hasAttribute("data-thumbnail") ? v[n].getAttribute("data-thumbnail") : "";

    if (placeholder.length) {
      p.innerHTML = createCustomThumbail(placeholder);
    } else {
      p.innerHTML = createThumbail(id);
    }

    v[n].appendChild(p);
    p.addEventListener("click", function () {
      var parent = this.parentNode;
      createIframe(parent, parent.getAttribute("data-id"));
    });
  }
}

/**
 * Create custom thumbnail from data-attribute provided url
 * @param {string} url
 * @return {string} The HTML containing the <img> tag
 */
function createCustomThumbail(url) {
  return '<img class="youtube-thumbnail" src="' + url + '" alt="Youtube Preview" /><div class="youtube-play-btn"></div>';
}

/**
 * Get Youtube default max resolution thumbnail
 * @param {string} id The Youtube video id
 * @return {string} The HTML containing the <img> tag
 */
function createThumbail(id) {
  return '<img class="youtube-thumbnail" src="//i.ytimg.com/vi_webp/' + id + '/maxresdefault.webp" alt="Youtube Preview"><div class="youtube-play-btn"></div>';
}

/**
 * Create and load iframe in Youtube container
 * @param {{ firstChild: { replaceWith: (arg0: any) => void; }; }} v
 * @param {string} id
 */
function createIframe(v, id) {
  var iframe = window.document.createElement("iframe");
  iframe.setAttribute("allowfullscreen", "allowfullscreen");
  iframe.setAttribute(
    "src",
    "//www.youtube.com/embed/" + id + "?autoplay=1&color=white&autohide=2&modestbranding=1&border=0&wmode=opaque&enablejsapi=1&showinfo=0&rel=0"
  );
  iframe.setAttribute("frameborder", "0");
  iframe.setAttribute("class", "youtube-iframe");
  v.firstChild.replaceWith(iframe);
}
