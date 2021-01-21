<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use DateTime;

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
    public static function calcularTotal2($productos){

        $total = 0.0;
        $i = 0;
        foreach($productos as $producto){
            $total += $producto->importe * $producto->cantidad; 

            
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
    public function addToPedido(){

        $user = Auth::user();
        $carritoUser = DB::table('carrito')->where('user_id', $user->id)->get();
        $date = new DateTime();
        $aleatorio = rand();
        while(true){
            $comprobar = DB::table('pedidos')->where('numpedido', $aleatorio)->first();
            if($comprobar == NULL){
            break;
            }
            $aleatorio = rand();
        }

    
        
            DB::table('pedidos')->insert([
                'numpedido' => $aleatorio,
                'fecha' => $date->format('d-m-Y'),
                'estado' => "pendiente",
                'user_id' => $user->id,
            ]);  
            $pedidoActual=DB::table('pedidos')->where('numpedido', $aleatorio)->first();

            foreach($carritoUser as $carrito){
                $productoCarrito = DB::table('productos')->where('id', $carrito->producto_id)->first(); 
                DB::table('linpeds')->insert([
                    'importe' => $productoCarrito->pvp,
                    'cantidad' => $carrito->cantidad,
                    'producto_id' => $productoCarrito->id,
                    'pedido_id' => $pedidoActual->id,
                ]);
                DB::table('carrito')->where('user_id', $user->id)->where('producto_id', $productoCarrito->id)->delete();
            }
                
            
        
        
       
        return redirect('pedidos');

    }
}
