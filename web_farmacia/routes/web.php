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

Route::get('/admin/categorias', 'App\Http\Controllers\AdminCatalagoController@getCategorias');

Route::post('/admin/categorias' , 'App\Http\Controllers\AdminCatalagoController@saveCategoria');

