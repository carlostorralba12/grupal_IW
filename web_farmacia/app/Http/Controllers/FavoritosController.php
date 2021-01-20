<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritosController extends Controller
{
    public function getProductosFavoritos(){
        $user = Auth::user();
        $carritoUser = DB::table('favoritos')->where('user_id', $user->id)->get();
       
        $productos = array();
      
        foreach($carritoUser as $carrito){
            $producto = Producto::find($carrito->producto_id);
            array_push($productos, $producto);
        }
        
        //Quitar repetidos en caso de que hayan en los seeders
        for($i = 0; $i < count($productos); ++$i){
            
            for($j = $i+1; $j < count($productos); $j++){

                if($productos[$i] == $productos[$j]){
                    unset($productos[$j]);
                    $productos = array_values($productos);
                  
                }

            }
            
        
        }
       
        return view('favoritos')->with('productos', $productos);
    }

    public function deleteProducto($id){

        DB::table('favoritos')->where('producto_id', $id)->delete();

        return redirect('favoritos');

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

}
