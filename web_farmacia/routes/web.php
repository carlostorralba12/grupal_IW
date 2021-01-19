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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('catalogo', 'App\Http\Controllers\ProductosController@showCatalogo');

Route::get('admin/categorias', 'App\Http\Controllers\Admin\Catalogo\CategoriasController@getCategorias');

Route::post('admin/categorias' , 'App\Http\Controllers\Admin\Catalogo\CategoriasController@saveCategoria');

Route::get('admin/categorias/{id}' , 'App\Http\Controllers\Admin\Catalogo\CategoriasController@getModalUpdate');
Route::post('admin/categorias/{id}' , 'App\Http\Controllers\Admin\Catalogo\CategoriasController@updateCategoria');