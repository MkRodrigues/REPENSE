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
   'resources/views/repense/css/logincadastro.css',
   'resources/views/repense/css/vizualizaprod.css',
   'resources/views/repense/css/prodslayout.css',
   'resources/views/repense/css/carrinhocompra.css',
   'resources/views/repense/css/pagamento.css',
   'resources/views/repense/css/meuperfil.css',
   'resources/views/repense/css/historico.css'
], 'public/css/repense/style.css');

mix
   .styles([
      'resources/views/admin/css/main.css',
      'resources/views/admin/css/admin.css',
      'resources/views/admin/css/categoria.css',
      'resources/views/admin/css/produto.css',
      'resources/views/admin/css/relatorio.css'
   ], 'public/css/admin/style.css')

   .styles(['node_modules/bootstrap/dist/css/bootstrap.min.css'
   ], 'public/assets/admin/bootstrap/bootstrap.css')

   .scripts([
      'node_modules/jquery/dist/jquery.min.js'
   ], 'public/assets/admin/bootstrap/jquery.js')

   .scripts([
    'resources/js/jquery.ajax.js'
 ], 'public/assets/repense/js/jquery.ajax.js')


   .scripts([
      'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
   ], 'public/assets/admin/bootstrap/bootstrap.js')

   .browserSync({
      proxy: 'http://127.0.0.1:8000/',
   });

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css')
//    .css('resources/views/repense/css/style.css', 'public/css');

// 'public/css/app.css',
// 		'public/js/app.js',
// 		'app/**/*',
// 		'routes/**/*',
// 		'resources/views/**/*',
//                 'resources/lang/**/*'
