<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;


class CatalogoController extends Controller
{
    public function inicio(){
        $categorias = Categoria::simplePaginate(5);
        $productos = Producto::all();  
        return view('catalogo.inicio', ['categorias' => $categorias])->with('productos', $productos);
    }

    public function getProducto($id){

        $producto = Producto::find($id);
        return view('catalogo.producto')->with('producto', $producto);

    }
}
