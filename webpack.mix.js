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
   'resources/assets/css/bootstrap.css',
   'resources/assets/css/font-awesome.min.css',
   // 'resources/assets/css/form-wizard.css',
   // 'resources/assets/css/jquery.bxslider.min.css',
   // 'resources/assets/css/owl.carousel.min.css',
   'resources/assets/css/responsive-style.css',
   'resources/assets/css/style.css',
   'resources/assets/css/botui.min.css',
   'resources/assets/css/botui-theme.css',
], 'public/css/all.min.css');

mix.scripts([
   'resources/assets/js/boostrap.min.js',
   'resources/assets/js/form-wizard-jquery.js',
   'resources/assets/js/jquery-3.1.0.min.js',
   'resources/assets/js/jquery.bxslider.min.js',
   'resources/assets/js/jquery.counterup.min.js',
   'resources/assets/js/jquery.validate.min.js',
   'resources/assets/js/jquery.waypoints.min.js',
   'resources/assets/js/main.js',
   'resources/assets/js/owl.carousel.min.js',
   'resources/assets/js/retina.min.js',
   'resources/assets/js/sweetalert2.all.min.js',
], 'public/js/all.min.js');

mix.js([
   'resources/js/app.js',
   'resources/assets/js/botui.js',
], 'public/js')