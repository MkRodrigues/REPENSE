<?php

use Illuminate\Support\Facades\Artisan;
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

Auth::routes();

Route::get('/', function () {
    return view('repense.index');
})->name('index');

// Sem necessidade de autenticação
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search/size/masculino', 'MasculinoController@searchSize')->name('masculino-search');
Route::get('/search/size/feminino', 'FemininoController@searchSize')->name('feminino-search');
Route::get('/search/size/acessorios', 'AcessoriosController@searchSize')->name('acessorios-search');
Route::get('/search/size/neutro', 'NeutroController@searchSize')->name('neutro-search');
Route::get('/feminino', 'FemininoController@index')->name('feminino');
Route::get('/masculino', 'MasculinoController@index')->name('masculino');
Route::get('/neutro', 'NeutroController@index')->name('neutro');
Route::get('/acessorios', 'AcessoriosController@index')->name('acessorios');
Route::get('/visualizarProduto/{product}', 'FemininoController@single')->name('repense.single');
Route::get('/search/product', 'ControllerProducts@searchProduct')->name('search-product');

// Rotas Carrinho de Compras
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', 'CartController@index')->name('index');
    Route::post('add', 'CartController@add')->name('add');
    Route::get('remove/{id}', 'CartController@remove')->name('remove');
});

// Rotas Checkout
Route::prefix('checkout')->name('checkout.')->group(function () {
    Route::get('/', 'CheckoutController@index')->name('index');
    Route::post('/proccess', 'CheckoutController@proccess')->name('proccess');
});


// Somente usuários autenticadas
Route::middleware(['auth'])->group(function () {
    Route::get('thanks', 'CheckoutController@thanks')->name('thanks');
    Route::get('relatorio', 'UserOrderController@index')->name('relatorio');
    Route::get('perfilusuario', 'UsersController@profileUser')->name('perfil.usuario');
    Route::get('profileedit', 'UsersController@editregister')->name('edit.profile');
    Route::put('profileupdate', 'UsersController@updateregister')->name('update.profile');
    Route::get('editregister', 'UsersController@editregister')->name('edit.register');
});

// Somente usuários autenticados e administradores
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin', 'AdminController');
    Route::resource('categories', 'ControllerCategory');
    Route::resource('products', 'ControllerProducts');
    Route::resource('report', 'ReportController');
    Route::get('trashed.categories', 'ControllerCategory@trashed')->name('categories.trashed');
    Route::put('restore.categories/{category}', 'ControllerCategory@restore')->name('category.restore');
    Route::get('trashed.products', 'ControllerProducts@trashed')->name('products.trashed');
    Route::put('restore.products/{product}', 'ControllerProducts@restore')->name('products.restore');
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::put('users/{user}/change-admin', 'UsersController@changeAdmin')->name('users.change-admin');
    Route::get('user/profile', 'UsersController@edit')->name('perfil.edit-profile');
    Route::put('user/profile', 'UsersController@update')->name('perfil.update-profile');
});
