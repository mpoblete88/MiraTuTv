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
mix.js('resources/assets/js/jquery.js', 'public/js');
mix.sass('resources/assets/sass/web.scss', 'public/css');
mix.sass('resources/assets/sass/icons.scss', 'public/css');
mix.sass('resources/assets/sass/datatable.scss', 'public/css');
mix.less('resources/assets/less/admin/admin.less', 'public/css');

mix.copy('resources/assets/images','public/images');
mix.copy('resources/assets/images/favicon.ico','public/');
mix.copy('resources/assets/fonts/','public/fonts/');
mix.copy('resources/assets/css/','public/css/');

mix.copy('resources/assets/js/module/','public/js/');
mix.copy('node_modules/animate.css/animate.min.css','public/css/animate.min.css');
