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

Route::get('/storagelink', function () {
    Artisan::call('storage:link');
});

// Templates
Route::get('/', function () {
    return view('repense.index');
})->name('index');



// Paginas Repense
Route::get('/index', function () {
    return view('repense.index');
});

Route::get('/pagamento', function () {
    return view('repense.pagamento');
});
Route::get('/historico', function () {
    return view('repense.historico');
});







Route::get('/home/visualizarProduto/{product}', 'FemininoController@single')->name('repense.single');

Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', 'CartController@index')->name('index');
    Route::post('add', 'CartController@add')->name('add');
    Route::get('remove/{id}', 'CartController@remove')->name('remove');
});






Route::prefix('checkout')->name('checkout.')->group(function () {
    Route::get('/', 'CheckoutController@index')->name('index');
    Route::post('proccess', 'CheckoutController@proccess')->name('proccess');
});

Route::get('/historico', function () {
    return view('repense.historico');
});


// Rotas Oficiais /Resource

Auth::routes();

//  ABAIXO VAI FICAR O GRUPO DE ROTAS DE USUARIOS

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/visualizarProduto/{product}', 'FemininoController@single')->name('repense.single');
Route::get('/feminino', 'FemininoController@index')->name('feminino');
Route::get('/masculino', 'MasculinoController@index')->name('masculino');
Route::get('/neutro', 'NeutroController@index')->name('neutro');
Route::get('/acessorios', 'AcessoriosController@index')->name('acessorios');

// Route::get('login/facebook', 'SocialiteController@redirectToProvider');
// Route::get('login/facebook/callback', 'SocialiteController@handleProviderCallback');
// Route::get('/home', 'HomeController@index')->name('pagina-inicial');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('categories', 'ControllerCategory');
    Route::resource('products', 'ControllerProducts');
    Route::resource('admin', 'AdminController');
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

Route::middleware(['auth'])->group(function () {
    Route::get('perfilusuario', 'UsersController@profileUser')->name('perfil.usuario');
    Route::get('profileedit', 'UsersController@editregister')->name('edit.profile');
    Route::put('profileupdate', 'UsersController@updateregister')->name('update.profile');

    Route::get('editregister', 'UsersController@editregister')->name('edit.register');
});

// Route::get('/perfilusuario', function () {
//     return view('repense.perfil');
// });


//  ABAIXO VAI FICAR O GRUPO DE ROTAS DE USUARIOS

Route::get('/home/visualizarProduto/{product}', 'FemininoController@single')->name('repense.single');
Route::get('/feminino', 'FemininoController@index')->name('feminino');
