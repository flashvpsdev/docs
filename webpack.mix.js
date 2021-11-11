const mix = require("laravel-mix");

mix
  .setPublicPath("../../public/vendor/docs/")
  .js("resources/js/app.js", "js")
  .sass("resources/scss/app.scss", "css/app.css", {}, [require("tailwindcss")])
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
