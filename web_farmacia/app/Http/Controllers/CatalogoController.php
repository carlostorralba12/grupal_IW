<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Subcategoria;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller
{
    public function inicio(){
        $categorias = Categoria::simplePaginate(5);
        $productos = Producto::all();  
       
        
        return view('catalogo.inicio', ['categorias' => $categorias])->with('productos', $productos);
    }

    public function getProducto($id){

        $producto = Producto::find($id);
        $subcategoria = $producto->subcategoria;
        $categoria = $subcategoria->categoria;
        return view('catalogo.producto')->with('producto', $producto)->with('subcategoria', $subcategoria)
        ->with('categoria', $categoria);

    }


    public function getCategoria($id){

        $categoria = Categoria::find($id);
        $productos = array();
    
        $subcategorias = $categoria->subcategorias;
     
        foreach($subcategorias as $subcategoria){

            $subcategoriaProductos = $subcategoria->productos;
            
            foreach($subcategoriaProductos as $producto){
                $productos[] = $producto;
            }

        }
        $path = 'catalogo/categorias/'.$categoria->id;
        $subcategorias = $this->paginate($subcategorias, $path);

        return view('catalogo.categoria')->with('subcategorias', $subcategorias)->with('productos', $productos)
        ->with('categoria', $categoria);
        
    }

    public function getSubcategoria($id){

        $subcategoria = Subcategoria::find($id);
        $productos = array();
        
        $productos = $subcategoria->productos;
     

   
        return view('catalogo.subcategoria')->with('subcategoria', $subcategoria)->with('productos', $productos)
        ->with('categoria', $subcategoria->categoria);
        
    }

    public function paginate($items,$path ,$perPage = 5, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginator = new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => url($path)]);
       
        return $paginator;
    }

    public function addCarrito($productoID){

        $user = Auth::user();
        $carritoUser = DB::table('carrito')->where('user_id', $user->id)->get();
        $existsProduct = false;
        if(count($carritoUser) > 0){    

            foreach($carritoUser as $carrito){
                if($carrito->producto_id == $productoID){
                    $existsProduct = true;
                    $productoCarrito = DB::table('carrito')->where('producto_id', $productoID)->first();  
                    $cantidad = $productoCarrito->cantidad + 1;
                    DB::table('carrito')->where('producto_id', $productoID)->update([
                        'cantidad' => $cantidad,
                    ]);
                }
            }
            if(!$existsProduct){
                DB::table('carrito')->insert([
                    'producto_id' => $productoID,
                    'user_id' => $user->id,
                    'cantidad' => 1,
                ]);
            }
        }
        else{
            DB::table('carrito')->insert([
                'producto_id' => $productoID,
                'user_id' => $user->id,
                'cantidad' => 1,
            ]);
        }
        
        $producto = Producto::find($productoID);
        return redirect('carrito')->with('producto', $producto);

    }

    public function addFavoritos($productoID){

        $user = Auth::user();
        $favoritosUser = DB::table('favoritos')->where('user_id', $user->id)->get();
        $existsProduct = false;
        if(count($favoritosUser) > 0){    

            foreach($favoritosUser as $favorito){
                if($favorito->producto_id == $productoID){
                   $existsProduct = true;
                }
            }
            if(!$existsProduct){
                DB::table('favoritos')->insert([
                    'producto_id' => $productoID,
                    'user_id' => $user->id,

                ]);
            }
        }
        else{
            DB::table('favoritos')->insert([
                'producto_id' => $productoID,
                'user_id' => $user->id,
            ]);
        }
        $producto = Producto::find($productoID);
        if($existsProduct){
            return back()->with('error', $producto->nombre);
        }
        else{
            
            return redirect('favoritos')->with('producto', $producto);
        }
    
    }
}
