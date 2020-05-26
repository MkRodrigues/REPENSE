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
   'resources/views/repense/css/main.css',
   'resources/views/repense/css/index.css',
   'resources/views/repense/css/loginUser.css',
   'resources/views/repense/css/vizualizaprod.css',
   'resources/views/repense/css/prodslayout.css',
], 'public/css/repense/style.css');

mix.styles([
   'resources/views/admin/css/main.css'
], 'public/css/admin/style.css');

mix.browserSync({
   proxy: 'http://127.0.0.1:8000/'
});

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css')
//    .css('resources/views/repense/css/style.css', 'public/css');
