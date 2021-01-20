<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function getProductosCarrito(){
        $user = Auth::user();
        $carritoUser = DB::table('carrito')->where('user_id', $user->id)->get();
       
        $productos = array();
        $cantidades = array();
        foreach($carritoUser as $carrito){
            $producto = Producto::find($carrito->producto_id);
            $cantidades[] = $carrito->cantidad; 
            array_push($productos, $producto);
        }
       
        /*
        for($i = 0; $i < count($productos); ++$i){
            
            for($j = $i+1; $j <= count($productos); $j++){

                if($productos[$i] == $productos[$j]){
                    $productos[$i]->cantidad++;
                    unset($productos[$j]);
                    $productos = array_values($productos);
                  
                }

            }
            
        
        }*/
      

        //$total = $this->calcularTotal($productos);

        return view('carrito')->with('productos', $productos)->with('cantidades', $cantidades);
    }

    public static function calcularTotal($productos, $cantidades){

        $total = 0.0;
        $i = 0;
        foreach($productos as $producto){
            $total += $producto->pvp * $cantidades[$i]; 

            $i++;
        }

        return $total;

    }

    public function deleteProducto($id){

        DB::table('carrito')->where('producto_id', $id)->delete();

        return redirect('carrito');

    }

    public function addCantidad($productoID){

        $productoCarrito = DB::table('carrito')->where('producto_id', $productoID)->first();  
        $cantidad = $productoCarrito->cantidad + 1;
        DB::table('carrito')->where('producto_id', $productoID)->update([
            'cantidad' => $cantidad,
        ]);
       
        
        return redirect('carrito');

    }

    public function deleteCantidad($productoID){
        
       
        $productoCarrito = DB::table('carrito')->where('producto_id', $productoID)->first();  
        $cantidad = $productoCarrito->cantidad - 1;
        DB::table('carrito')->where('producto_id', $productoID)->update([
            'cantidad' => $cantidad,
        ]);
       
        
        return redirect('carrito');

    }
}
