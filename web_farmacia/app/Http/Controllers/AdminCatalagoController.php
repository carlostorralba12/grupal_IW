<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class AdminCatalagoController extends Controller

{
    private $addCategoriaMessage = '';
    public function getCategorias(){    
        
        return view('admin.catalogo.categorias', ['categorias' => Categoria::simplePaginate(10) ])->with('mensaje', $this->addCategoriaMessage);
    }

    public function saveCategoria(Request $request){

        $request->validate([
            'nombre' => 'required|unique:categorias'
        ]);
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        $this->addCategoriaMessage = ((string)$categoria->nombre);
        return $this->getCategorias();
    }
}
