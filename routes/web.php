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

Route::get('/acessorios', function () {
    return view('repense.acessorios');
});


Route::get('/home/visualizarProduto/{product}','FemininoController@single')->name('repense.single');

Route::prefix('cart')->name('cart.')->group(function(){
    Route::get('/','CartController@index')->name('index');
    Route::post('add', 'CartController@add')->name('add');
    Route::get('remove/{id}','CartController@remove')->name('remove');
    // Route::get('productIncrement/{id,size,quantity,product}','CartController@productIncrement')->name('productIncrement');

});


Route::get('/acessorios', function () {
    return view('repense.acessorios');
})->name('acessorios');
Route::get('/masculino', function () {
    return view('repense.masculino');
})->name('masculino');;

Route::get('/feminino','FemininoController@index')->name('feminino');

Route::get('/neutro', function () {
    return view('repense.neutro');
})->name('neutro');


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

Route::resource('/home/categories', 'ControllerCategory');
Route::resource('/home/products', 'ControllerProducts');
Route::get('trashed.categories' , 'ControllerCategory@trashed')->name('categories.trashed');
