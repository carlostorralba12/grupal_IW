<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Models\Producto;

use App\Models\Pedido;




class PedidoController extends Controller
{
    public function showPedido(){

        $producto=Producto::all();  
        $user = auth()->user();
        $pedidoUsuario= DB::table('pedidos')->where('user_id', $user->id)->get();
        
        return view('listadoPedidos', ['pedidos' => $pedidoUsuario]);
    }
    public function postpedidoBorrado(Request $request){
            
        $variable =$request->input('primaria');
        $pedidos = Pedido::find($variable);
        $pedidos->delete();
        $producto=Producto::all();  
        $user = auth()->user();
        $pedidoUsuario= DB::table('pedidos')->where('user_id', $user->id)->get();
        
        return view('listadoPedidos', ['pedidos' => $pedidoUsuario]);
    }
}
