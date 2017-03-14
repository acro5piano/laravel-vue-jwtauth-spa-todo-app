const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

if (process.env.NODE_ENV == 'production') {
  mix.js('resources/assets/js/app.js', 'public/dist/js')
     .sass('resources/assets/sass/app.scss', 'public/dist/css');
} else {
  mix.js('resources/assets/js/app.js', 'public/js')
     .sass('resources/assets/sass/app.scss', 'public/css');
}
