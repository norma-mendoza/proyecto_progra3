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

mix.styles([
   'resources/plantilla/css/font-awesome.min.css',
   'resources/plantilla/css/simple-line-icons.min.css',   
   'resources/plantilla/css/bootstrap.min.css',
   'resources/plantilla/css/style.css',
   'resources/plantilla/css/main.css'

], 'public/css/plantilla.css');

mix.scripts([
   'resources/plantilla/js/jquery.min.js',
   'resources/plantilla/js/popper.min.js',
   'resources/plantilla/js/bootstrap.min.js',
   'resources/plantilla/js/Char.min.js',   
   'resources/plantilla/js/pace.min.js',   
   'resources/plantilla/js/template.js',
   'resources/plantilla/js/sweetalert2.all.min.js'

], 'public/js/plantilla.js');


mix.js('resources/js/app.js', 'public/js/app.js');