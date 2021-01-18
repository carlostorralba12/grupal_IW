<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function getProductosCarrito(){
        $user = Auth::user();
        $productosCarrito = DB::table('carrito')->where('user_id', $user->id)->get();
       
        $productos = array();

        foreach($productosCarrito as $productoID){
            $producto = Producto::find($productoID->producto_id);
            array_push($productos, $producto);
        }
       
        
        
        for($i = 0; $i < count($productos); ++$i){
            
            for($j = $i+1; $j < count($productos); $j++){

                if($productos[$i] == $productos[$j]){
                    $productos[$i]->cantidad++;
                    unset($productos[$j]);
                    $productos = array_values($productos);
                  
                }

            }
            
        
        }

        //$total = $this->calcularTotal($productos);

        return view('carrito')->with('productos', $productos);
    }

    public static function calcularTotal($productos){

        $total = 0.0;
        foreach($productos as $producto){
            $total += $producto->pvp * $producto->cantidad; 
        }

        return $total;

    }
}
