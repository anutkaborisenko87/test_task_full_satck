const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/front/main.js', 'public/js/front')
    .css('resources/css/front/main.css', 'public/css/front')
    .css('resources/css/front/icomoon/style.css', 'public/css/front/icomoon')
    .css('resources/css/dashboard/style.css', 'public/css/dashboard');
