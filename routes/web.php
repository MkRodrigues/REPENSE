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
    return view('repense.templates.main');
});

Route::get('/admin', function () {
    return view('admin.templates.main');
});




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

Route::get('/visualizarproduto', function () {
    return view('repense.visualizarProduto');
});

Route::get('/acessorios', function () {
    return view('repense.acessorios');
});
Route::get('/masculino', function () {
    return view('repense.masculino');
});
Route::get('/feminino', function () {
    return view('repense.feminino');
});
Route::get('/neutro', function () {
    return view('repense.neutro');
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

Route::resource('/home/categories', 'ControllerCategory');
Route::resource('/home/products', 'ControllerProducts');
Route::get('trashed.categories' , 'ControllerCategory@trashed')->name('categories.trashed');
