<?php

namespace App\Http\Controllers\Admin\Catalogo;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Producto;

class CatalogoController extends Controller
{
    private $categoriaAdded;
    private $subCategoriaAdded = null;
    private $productoAdded = null;
    private $checkAddedCategoria = false;
    private $updateCategoriaMessage = '';
    private $updateSubcategoriaMessage = '';
    private $updateProductoMessage = '';
    private $deleteCategoriaMessage = '';
    private $deleteSubcategoriaMessage = '';
    private $deleteProductoMessage = '';

    public function getCategorias(){    
        
        return view('admin.catalogo.categoria.categorias', ['categorias' => Categoria::simplePaginate(10) ])
        ->with('categoriaAdded', $this->categoriaAdded)->with('checkAddedCategoria', $this->checkAddedCategoria)
        ->with('deleteCategoriaMessage', $this->deleteCategoriaMessage)->with('selectCategorias', Categoria::all())
        ->with('subCategoriaAdded', $this->subCategoriaAdded)->with('productoAdded', $this->productoAdded);
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
        ->with('selectCategorias', Categoria::all())->with('subCategoriaAdded', $this->subCategoriaAdded)
        ->with('deleteSubcategoriaMessage', $this->deleteSubcategoriaMessage)->with('productoAdded', $this->productoAdded);

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
        ->with('subCategoriaAdded', $this->subCategoriaAdded)->with('categoriaAdded', $this->categoriaAdded)
        ->with('deleteProductoMessage' , $this->deleteProductoMessage)->with('productoAdded', $this->productoAdded)
        ->with('mensajeUpdatesubCategoria', $this->updateSubcategoriaMessage);
       
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
        $this->updateSubcategoriaMessage = $subcategoria->nombre;
        $subcategoria->update();
        return $this->detallesSubcategoria($id);
    }

    public function deleteSubcategoria($id){

        $subcategoria = Subcategoria::find($id); 
        $this->deleteSubcategoriaMessage = ((string)$subcategoria->nombre);
        $categoriaID = $subcategoria->categoria_id;
        $subcategoria->delete(); 
        return $this->detallesCategoria($categoriaID);
    }



    public function saveProducto(Request $request){

        $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
        ]);
            
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->pvp = $request->input('pvp');
        $producto->referencia = $request->input('referencia');
        $producto->descripcionCorta = $request->input('descripcionCorta');
        $producto->descripcionLarga = $request->input('descripcionLarga');
        $producto->imagen =  Storage::disk('imagenProducto')->put('',$request->file('imagen'));
        $producto->subcategoria_id = $request->input('subcategoriaID');
        $this->productoAdded = $producto;
        $producto->save();
        return $this->detallesSubCategoria($producto->subcategoria_id);
    }


    public function detallesProducto($id){
        $producto = Producto::find($id);
        return view ('admin.catalogo.producto.detallesProducto')->with('selectSubcategorias', Subcategoria::all())
        ->with('selectCategorias', Categoria::all())->with('producto', $producto)->with('mensajeUpdateProducto', $this->updateProductoMessage)
        ->with('subCategoriaAdded', $this->subCategoriaAdded)->with('categoriaAdded', $this->categoriaAdded)
        ->with('productoAdded', $this->productoAdded);

    }

    public function ShowFormAddProducto(){

        return view ('admin.catalogo.producto.addProducto')->with('selectSubcategorias', Subcategoria::all())
        ->with('selectCategorias', Categoria::all());

    }

    public function ShowFormUpdateProducto($id){

        $producto = Producto::find($id);
        return view ('admin.catalogo.producto.updateProducto')->with('selectSubcategorias', Subcategoria::all())
        ->with('selectCategorias', Categoria::all())->with('producto', $producto);
    }


    public function deleteProducto($id){

        $producto = Producto::find($id); 
        $this->deleteProductoMessage = ((string)$producto->nombre);
        $subcategoriaId = $producto->subcategoria_id;
        Storage::disk('imagenProducto')->delete($producto->imagen);
        $producto->delete(); 
        return $this->detallesSubCategoria($subcategoriaId);
    }

    public function updateProducto(Request $request, $id){
    
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->pvp = $request->input('pvp');
        $producto->referencia = $request->input('referencia');
        $producto->descripcionCorta = $request->input('descripcionCorta');
        $producto->descripcionLarga = $request->input('descripcionLarga');
        if($request->hasFile('imagen')){
            Storage::disk('imagenProducto')->delete($producto->imagen);
            $producto->imagen =  Storage::disk('imagenProducto')->put('',$request->file('imagen'));
        }

        if($request->input('subcategoriaID') != 'Selecciona'){
            $producto->subcategoria_id = $request->input('subcategoriaID');
        }
        $this->updateProductoMessage = (string)$producto->nombre;
        $producto->update();
        return $this->detallesProducto($id);
    }



}
