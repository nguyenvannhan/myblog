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
    // Common
    .sass('resources/sass/common.scss', 'public/css/')

    // WWW
    .sass('resources/sass/www/login.scss', 'public/www/css/')

    // Admin
    .sass('resources/sass/admin/main.scss', 'public/_admin/css');
