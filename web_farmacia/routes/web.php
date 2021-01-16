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


/*********************************************************************************** 
 *                                      ADMIN
 ***********************************************************************************/ 
Route::middleware('admin')->group(function(){
    // CATEGORIAS
    Route::prefix('admin')->group(function(){
        Route::get('categorias', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@getCategorias');
        Route::post('categorias', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@saveCategoria');
        Route::get('categorias/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@detallesCategoria');
        Route::post('categorias/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@updateCategoria');
        Route::post('categorias/{id}/borrar' , 'App\Http\Controllers\Admin\Catalogo\CatalogoController@deleteCategoria');
        // SUBCATEGORIAS
        Route::get('subcategorias/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@detallesSubcategoria');
        Route::post('subcategorias', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@saveSubcategoria');
        Route::post('subcategorias/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@updateSubcategoria');
        Route::post('subcategorias/{id}/borrar', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@deleteSubcategoria');
        // PRODUCTOS
        Route::post('productos', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@saveProducto');
        Route::get('productos/añadir', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@ShowFormAddProducto');
        Route::get('productos/{id}/modificar', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@ShowFormUpdateProducto');
        Route::get('productos/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@detallesProducto');
        Route::post('productos/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@updateProducto');
        Route::post('productos/{id}/borrar', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@deleteProducto');
    });
   
});
