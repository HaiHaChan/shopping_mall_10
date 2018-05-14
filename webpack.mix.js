let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.copyDirectory(['resources/assets/css'], 'public/css');
mix.copyDirectory(['resources/assets/js/admin'], 'public/js/admin');
mix.copyDirectory(['resources/assets/images'], 'public/images');
mix.copyDirectory(['resources/assets/images'], 'public/images')
   .copyDirectory(['resources/assets/js/user'], 'public/js/user')
   .copyDirectory(['resources/assets/css/user'], 'public/css/user');
