<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use App\Models\Categoria;


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
// CATEGORIAS
Route::get('admin/categorias', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@getCategorias');
Route::post('admin/categorias', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@saveCategoria');
Route::get('admin/categorias/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@detallesCategoria');
Route::post('admin/categorias/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@updateCategoria');
Route::post('admin/categorias/{id}/borrar' , 'App\Http\Controllers\Admin\Catalogo\CatalogoController@deleteCategoria');
// SUBCATEGORIAS
Route::get('admin/subcategorias/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@detallesSubcategoria');
Route::post('admin/subcategorias', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@saveSubcategoria');
Route::post('admin/subcategorias/{id}', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@updateSubcategoria');
Route::post('admin/subcategorias/{id}/borrar', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@deleteSubcategoria');
// PRODUCTOS
Route::post('admin/productos', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@saveProducto');
Route::get('admin/productos/añadir', 'App\Http\Controllers\Admin\Catalogo\CatalogoController@ShowFormAddProducto');