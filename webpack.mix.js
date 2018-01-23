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

mix.js('resources/assets/js/app.js', 'public/js');
mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.copy('resources/assets/images','public/images');
mix.copy('resources/assets/images/favicon.ico','public/');
mix.copy('resources/assets/fonts/','public/fonts/');
mix.copy('resources/assets/css/','public/css/');
mix.copy('resources/assets/js/libraries/','public/js/')
mix.copy('resources/assets/bower_components/','public/plugins/');
mix.copy('node_modules/animate.css/animate.min.css','public/css/animate.min.css');
