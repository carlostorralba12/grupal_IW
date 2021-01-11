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
    private $deleteCategoriaMessage = '';

    public function getCategorias(){    
        
        return view('admin.catalogo.categoria.categorias', ['categorias' => Categoria::simplePaginate(10) ])
        ->with('categoriaAdded', $this->categoriaAdded)->with('checkAddedCategoria', $this->checkAddedCategoria)
        ->with('deleteCategoriaMessage', $this->deleteCategoriaMessage);
    }

    public function saveCategoria(Request $request){

        $request->validate([
            'nombreCategoria' => 'required|unique:categorias'
        ]);
        $categoria = new Categoria();
        $categoria->nombreCategoria = $request->input('nombreCategoria');
        $categoria->save();
        $this->checkAddedCategoria = true;
        $this->categoriaAdded = $categoria;
        return $this->getCategorias();
    }

    public function updateCategoria(Request $request, $id){
      
        $categoria = Categoria::find($id);
        $categoria->nombreCategoria = $request->input('nombre');
        $categoria->update();
        $this->checkAddedCategoria = false;
        $this->updateCategoriaMessage = ((string)$categoria->nombreCategoria);
        return $this->detallesCategoria($id);
    }

    public function detallesCategoria($id){

        $categoria = Categoria::find($id);
        $subcategorias = $categoria->subcategorias()->simplePaginate(10);
        return view('admin.catalogo.categoria.detallesCategoria')->with('categoria', $categoria)->with('subcategorias', $subcategorias)
        ->with('mensajeUpdateCategoria', $this->updateCategoriaMessage)->with('categoriaAdded', $this->categoriaAdded);

    }
    public function deleteCategoria($id){

        $categoria = Categoria::find($id); 
        $this->deleteCategoriaMessage = $categoria->nombre;
        $categoria->delete(); 
        return $this->getCategorias();
    }
}
