<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Templates
Route::get('/', function () {
    return view('repense.index');
});

// Route::get('/admin', function () {
//     return view('admin.templates.main');
// });




// Paginas Repense
Route::get('/index', function () {
    return view('repense.index');
});

Route::get('/pagamento', function () {
    return view('repense.pagamento');
});

Route::get('/acessorios', function () {
    return view('repense.acessorios');
});

Route::get('/carrinhoCompra', function () {
    return view('repense.carrinhoCompra');
});

Route::get('/home/visualizarProduto/{product}','FemininoController@single')->name('repense.single');
    


Route::get('/acessorios', function () {
    return view('repense.acessorios');
});
Route::get('/masculino', function () {
    return view('repense.masculino');
});

Route::get('/feminino','FemininoController@index')->name('feminino');

Route::get('/neutro', function () {
    return view('repense.neutro');
});


// Route::prefix('checkout')->name('checkout. ')->group(function(){
//     Route::get('/' , 'CheckoutController@index')->name('index');
// });
Route::get('/checkout', function () {
    return view('repense.checkout');
});

// Admin
Route::get('/loginAdmin', function () {
    return view('repense.loginAdmin');
});

Route::get('/teste', function () {
    return view('admin.teste');
});





// Rotas Oficiais /Resource

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/categories', 'ControllerCategory');
Route::resource('/products', 'ControllerProducts');
Route::resource('/admin', 'AdminController');
Route::resource('/report', 'ReportController');
Route::get('trashed.categories', 'ControllerCategory@trashed')->name('categories.trashed');
