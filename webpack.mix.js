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
mix.styles(['node_modules/admin-lte/bootstrap/css/bootstrap.min.css','node_modules/admin-lte/dist/css/AdminLTE.css','node_modules/admin-lte/dist/css/skins/_all-skins.min.css'],'public/css/admin.css')
    .scripts(['node_modules/jquery/dist/jquery.min.js'],'public/js/jquery.js')
    .scripts(['node_modules/admin-lte/dist/js/app.min.js    ','node_modules/admin-lte/bootstrap/js/bootstrap.min.js'],'public/js/admin.js')
    .sass('resources/assets/sass/app.scss','public/css/styles.css');
