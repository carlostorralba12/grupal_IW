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
    public function getPedidos(){
        $pedidos=Pedido::paginate(10);
        return view('admin.pedido.pedido', ['pedidos' => $pedidos]);
        
        
    }
    public function postpedidoBorrar(Request $request){
            
        $variable =$request->input('primaria');
        $pedidos = Pedido::find($variable);
        $pedidos->delete();
        return redirect('admin/pedidos');
        
        
        
    }
    public function postShowModificar(Request $request){
        $aux = $request->input('primaria');
        $pedidos= Pedido::find($aux);
        
        return view('admin.pedido.modificarPedido', ['pedidos' => $pedidos]);
    }
    public function postPedidoModificar(Request $request){
            
        switch ($request->input('action')) {
            case 'modificar':
                
        
                $variable =$request->input('pedido_id');
                
                $pedido = Pedido::find($variable);
                $pedido->numpedido=$request->input('NumPedido');
                $pedido->user_id=$request->input('user_id');
                $pedido->estado=$request->input('estado');
                
                $pedido->save();
                return redirect('admin/pedidos');
                break;

        }
        return redirect('admin/pedidos');
    }
}
