<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Models\Producto;

use App\Models\Pedido;

use App\Models\Linped;

class LinpedController extends Controller
{
    public function showLinpeds(){
        $linpeds=Linped::paginate(5);
        return view('listadoLinped', ['linpeds' => $linpeds]);
    }
    public function showLinped(Request $request){
        $variable = $request->input('primaria');    
        $NPedido = $request->input('primaria');  
        $linpeds= DB::table('linpeds')->where('pedido_id', $variable)->get();
        $productos = array();

        foreach($linpeds as $productoID){
            $producto = Producto::find($productoID->producto_id);
            array_push($productos, $producto);
        }

        
        return view('listadoLinped', ['NPedido' => $NPedido], ['productos' => $productos])->with('linpeds', $linpeds);
    }
    public function deleteProducto($idProducto, $idPedido){

        DB::table('linpeds')->where('producto_id', $idProducto)-> where('pedido_id', $idPedido)->delete();
        $total= DB::table('linpeds')-> where('pedido_id', $idPedido)->get();
        if(count($total)==0){
            DB::table('pedidos')-> where('id', $idPedido)->delete();
        }
        $user = auth()->user();
        if($user->typeUser=="admin"){
            return redirect('admin/pedidos');
        }
        return redirect('pedidos');

    }
    public function addCantidad($idProducto, $idPedido){

        
        $affected = DB::table('linpeds')
              ->where('producto_id', $idProducto)
              ->where('pedido_id', $idPedido);
              
        $affected->increment('cantidad');
        
        return redirect('pedidos');

    }

    public function deleteCantidad($idProducto, $idPedido){

        $affected = DB::table('linpeds')
              ->where('producto_id', $idProducto)
              ->where('pedido_id', $idPedido);
              
        $affected->decrement('cantidad');
        
        return redirect('pedidos');

    }
}
