<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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






Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('catalogo', 'App\Http\Controllers\ProductosController@showCatalogo');


Route::middleware('auth')->group(function(){
    //CARRITO
    Route::get('carrito', 'App\Http\Controllers\CarritoController@getProductosCarrito');
});



/*********************************************************************************** 
 *                                      ADMIN
 ***********************************************************************************/ 
Route::middleware('admin')->group(function(){
    // CATEGORIAS
    Route::prefix('admin')->group(function(){
        Route::get('categorias', 'App\Http\Controllers\Admin\CatalogoController@getCategorias');
        Route::get('categorias/añadir', 'App\Http\Controllers\Admin\CatalogoController@ShowFormAddCategoria');
        Route::post('categorias', 'App\Http\Controllers\Admin\CatalogoController@saveCategoria');
        Route::get('categorias/{id}', 'App\Http\Controllers\Admin\CatalogoController@detallesCategoria');
        Route::post('categorias/{id}', 'App\Http\Controllers\Admin\CatalogoController@updateCategoria');
        Route::get('categorias/{id}/modificar', 'App\Http\Controllers\Admin\CatalogoController@ShowFormUpdateCategoria');
        Route::post('categorias/{id}/borrar' , 'App\Http\Controllers\Admin\CatalogoController@deleteCategoria');
        // SUBCATEGORIAS
        Route::get('subcategorias/añadir', 'App\Http\Controllers\Admin\CatalogoController@ShowFormAddSubcategoria');
        Route::post('subcategorias', 'App\Http\Controllers\Admin\CatalogoController@saveSubcategoria');
        Route::get('subcategorias/{id}', 'App\Http\Controllers\Admin\CatalogoController@detallesSubcategoria');
        Route::get('subcategorias/{id}/modificar', 'App\Http\Controllers\Admin\CatalogoController@ShowFormUpdateSubcategoria');
        Route::post('subcategorias/{id}', 'App\Http\Controllers\Admin\CatalogoController@updateSubcategoria');
        Route::post('subcategorias/{id}/borrar', 'App\Http\Controllers\Admin\CatalogoController@deleteSubcategoria');
        // PRODUCTOS
        Route::post('productos', 'App\Http\Controllers\Admin\CatalogoController@saveProducto');
        Route::get('productos/añadir', 'App\Http\Controllers\Admin\CatalogoController@ShowFormAddProducto');
        Route::get('productos/{id}/modificar', 'App\Http\Controllers\Admin\CatalogoController@ShowFormUpdateProducto');
        Route::get('productos/{id}', 'App\Http\Controllers\Admin\CatalogoController@detallesProducto');
        Route::post('productos/{id}', 'App\Http\Controllers\Admin\CatalogoController@updateProducto');
        Route::post('productos/{id}/borrar', 'App\Http\Controllers\Admin\CatalogoController@deleteProducto');
    });
   
});
