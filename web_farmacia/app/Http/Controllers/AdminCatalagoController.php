<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCatalagoController extends Controller
{
    public function getCategorias(){
        $categorias=Categoria::all();  
        
        return view('admin.catalogo.inicio', [' categorias' => $categorias]);
    }
}
