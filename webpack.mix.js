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

mix
   // admin js
   .js([
      'node_modules/bootstrap/dist/js/bootstrap.min.js',
      'resources/assets/js/admin/admin.js'
   ], 'public/js/admin.min.js')
   // admin CSS 
   .sass('resources/assets/sass/admin.scss', 'public/css')
   .combine([
      'node_modules/bootstrap/dist/css/bootstrap.min.css',
      'public/css/admin.css'
   ], 'public/css/admin.min.css')

;


