const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')


mix.react('resources/js/app.js', 'public/js');
    // .sass('resources/sass/app.scss', 'public/css');

mix.sass('resources/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('./tailwind.config.js') ],
  })