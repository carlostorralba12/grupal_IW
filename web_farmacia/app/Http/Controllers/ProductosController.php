<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;


class ProductosController extends Controller
{
    public function showCatalogo(){
        $producto=Producto::all();  
        
        return view('catalogo', ['productos' => $producto]);
    }
}
