let mix = require('laravel-mix');

mix
  .js("resources/js/app.js", "public/assets/web/js/app.js")
  .sass("resources/sass/style.scss", "public/assets/web/css/style.scss");
