<?php

namespace App\Http\Controllers\Admin\Catalogo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    private $categoriaAdded;
    private $checkAddedCategoria = false;
    private $updateCategoriaMessage = '';
    public function getCategorias(){    
        
        return view('admin.catalogo.categoria.categorias', ['categorias' => Categoria::simplePaginate(10) ])
        ->with('categoriaAdded', $this->categoriaAdded)->with('checkAddedCategoria', $this->checkAddedCategoria);
    }

    public function saveCategoria(Request $request){

        $request->validate([
            'nombre' => 'required|unique:categorias'
        ]);
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        $this->checkAddedCategoria = true;
        $this->categoriaAdded = $categoria;
        return $this->getCategorias();
    }

    public function updateCategoria(Request $request, $id){

        $request->validate([
            'nombre' => 'required|unique:categorias'
        ]);
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        $this->checkAddedCategoria = false;
        $this->updateCategoriaMessage = ((string)$categoria->nombre);
        return $this->detallesCategoria($id);
    }

    public function detallesCategoria($id){

        $categoria = Categoria::find($id);
        $subcategorias = $categoria->subcategorias()->simplePaginate(10);
        return view('admin.catalogo.categoria.detallesCategoria')->with('categoria', $categoria)->with('subcategorias', $subcategorias)
        ->with('mensajeUpdateCategoria', $this->updateCategoriaMessage)->with('categoriaAdded', $this->categoriaAdded);

    }
    public function getModalUpdate($id){

        return view('admin.catalogo.categoria.updateCategoria', ['categoria' => Categoria::find($id)])->with('modal', true);
    }
}
