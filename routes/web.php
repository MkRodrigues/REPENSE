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

// Templates
Route::get('/', function () {
    return view('repense.index');
})->name('index');

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







Route::get('/home/visualizarProduto/{product}','FemininoController@single')->name('repense.single');

Route::prefix('cart')->name('cart.')->group(function(){
    Route::get('/','CartController@index')->name('index');
    Route::post('add', 'CartController@add')->name('add');
    Route::get('remove/{id}','CartController@remove')->name('remove');
});


Route::get('/acessorios', function () {
    return view('repense.acessorios');
})->name('acessorios');
Route::get('/masculino', function () {
    return view('repense.masculino');
})->name('masculino');;


Route::get('/neutro', function () {
    return view('repense.neutro');
})->name('neutro');


// Route::prefix('checkout')->name('checkout. ')->group(function(){
//     Route::get('/' , 'CheckoutController@index')->name('index');
// });
Route::get('/checkout', function () {
    return view('repense.checkout');
});







// Rotas Oficiais /Resource

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth' , 'admin'])->group(function(){
    Route::resource('home/categories', 'ControllerCategory');
    Route::resource('home/products', 'ControllerProducts');
    Route::resource('home/admin', 'AdminController');
    Route::resource('home/report', 'ReportController');
    Route::get('trashed.categories', 'ControllerCategory@trashed')->name('categories.trashed');
    Route::put('restore.categories/{category}', 'ControllerCategory@restore')->name('category.restore');
    Route::get('trashed.products', 'ControllerProducts@trashed')->name('products.trashed');
    Route::put('restore.products/{product}', 'ControllerProducts@restore')->name('products.restore');
    Route::get('users' , 'UsersController@index')->name('users.index');
    Route::put('users/{user}/change-admin' , 'UsersController@changeAdmin')->name('users.change-admin');
});




//  ABAIXO VAI FICAR O GRUPO DE ROTAS DE USUARIOS

Route::get('/home/visualizarProduto/{product}','FemininoController@single')->name('repense.single');
Route::get('/feminino','FemininoController@index')->name('feminino');
