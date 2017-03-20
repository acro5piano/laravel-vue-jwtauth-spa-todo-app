const { mix } = require('laravel-mix');

if (process.env.NODE_ENV == 'production') {
  mix.js('resources/assets/js/app.js', 'public/dist/js')
     .sass('resources/assets/sass/app.scss', 'public/dist/css');
} else {
  mix.js('resources/assets/js/app.js', 'public/js')
     .sass('resources/assets/sass/app.scss', 'public/css');
}
