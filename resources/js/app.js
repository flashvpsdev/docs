import persist from "@alpinejs/persist";
import Alpine from "alpinejs";
Alpine.plugin(persist);

window.Alpine = Alpine;

Alpine.store("theme", {
  theme: Alpine.$persist("light"),

  setTheme(theme) {
    this.theme = theme;
    document.body.setAttribute("data-theme", theme);
  },
});

Alpine.start();
