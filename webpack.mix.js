const mix = require("laravel-mix");

mix
  .setPublicPath("../../public/vendor/docs/")
  .js("resources/js/app.js", "js")
  .postCss("resources/css/app.css", "css", [require("tailwindcss")])
  .options({
    processCssUrls: false,
    terser: { extractComments: false, terserOptions: { compress: { drop_console: true } } },
  })
  .disableNotifications();

if (mix.inProduction()) {
  mix.version();
} else {
  mix.sourceMaps();
}
