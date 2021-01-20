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

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//CATALOGO
Route::prefix('catalogo')->group(function(){
    Route::get('', 'App\Http\Controllers\CatalogoController@inicio');
    Route::get('productos/{id}', 'App\Http\Controllers\CatalogoController@getProducto');
    Route::get('categorias/{id}', 'App\Http\Controllers\CatalogoController@getCategoria');
    Route::get('subcategorias/{id}', 'App\Http\Controllers\CatalogoController@getSubcategoria');
    Route::get('carrito/{id}', 'App\Http\Controllers\CatalogoController@addCarrito');
    Route::get('favoritos/{id}', 'App\Http\Controllers\CatalogoController@addFavoritos');
    
});


Route::middleware('auth')->group(function(){
    //CARRITO
    Route::prefix('carrito')->group(function(){
        Route::get('', 'App\Http\Controllers\CarritoController@getProductosCarrito');
        Route::get('cantidad/añadir/{id}', 'App\Http\Controllers\CarritoController@addCantidad');
        Route::get('cantidad/eliminar/{id}', 'App\Http\Controllers\CarritoController@deleteCantidad');
        Route::get('producto/eliminar/{id}', 'App\Http\Controllers\CarritoController@deleteProducto');

    });

    //FAVORITOS
    Route::prefix('favoritos')->group(function(){
        Route::get('', 'App\Http\Controllers\FavoritosController@getProductosFavoritos');
        Route::get('producto/eliminar/{id}', 'App\Http\Controllers\FavoritosController@deleteProducto');
        Route::get('carrito/{id}', 'App\Http\Controllers\FavoritosController@addCarrito');

    });
   
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

// Contacto
Route::get('contacto', 'App\Http\Controllers\ContactoController@contacto');
Route::post('contacto', [
    'as'=>'contacto.store',
    'uses'=>'App\Http\Controllers\ContactoController@contactoPost'
]);