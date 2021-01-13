<?php

namespace App\Http\Controllers\Admin\Catalogo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Subcategoria;

class CatalogoController extends Controller
{
    private $categoriaAdded;
    private $subCategoriaAdded = null;
    private $checkAddedCategoria = false;
    private $updateCategoriaMessage = '';
    private $deleteCategoriaMessage = '';

    public function getCategorias(){    
        
        return view('admin.catalogo.categoria.categorias', ['categorias' => Categoria::simplePaginate(10) ])
        ->with('categoriaAdded', $this->categoriaAdded)->with('checkAddedCategoria', $this->checkAddedCategoria)
        ->with('deleteCategoriaMessage', $this->deleteCategoriaMessage)->with('selectCategorias', Categoria::all())
        ->with('subCategoriaAdded', $this->subCategoriaAdded);
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
        ->with('mensajeUpdateCategoria', $this->updateCategoriaMessage)->with('categoriaAdded', $this->categoriaAdded)
        ->with('selectCategorias', Categoria::all())->with('subCategoriaAdded', $this->subCategoriaAdded);

    }
    
    public function deleteCategoria($id){

        $categoria = Categoria::find($id); 
        $this->deleteCategoriaMessage = ((string)$categoria->nombreCategoria);
        $categoria->delete(); 
        return $this->getCategorias();
    }

    public function detallesSubCategoria($id){    

        $subcategoria = Subcategoria::find($id);
        $categoria = Categoria::find($subcategoria->categoria_id);
        $productos = $subcategoria->productos()->simplePaginate(10);

        return view('admin.catalogo.subcategoria.detallesSubcategoria')->with('productos', $productos)
        ->with('subcategoria', $subcategoria)->with('categoria', $categoria)->with('selectCategorias', Categoria::all())
        ->with('subCategoriaAdded', $this->subCategoriaAdded)->with('categoriaAdded', $this->categoriaAdded);
       
    }

    public function saveSubcategoria(Request $request){

        $request->validate([
            'nombre' => 'required'
        ]);
        $subcategoria = new Subcategoria();
        $subcategoria->nombre = $request->input('nombre');
        $subcategoria->categoria_id = $request->input('categoriaID');
        $this->subCategoriaAdded = $subcategoria;
        $subcategoria->save();
        return $this->detallesCategoria($subcategoria->categoria_id);
    }


    public function updateSubcategoria(Request $request, $id){
    
        $subcategoria = Subcategoria::find($id);
        $subcategoria->nombre = $request->input('nombre');
        if($request->input('categoriaID') != 'Selecciona'){
            $subcategoria->categoria_id = $request->input('categoriaID');
        }
        
        $subcategoria->update();
        return $this->detallesSubcategoria($id);
    }
}
