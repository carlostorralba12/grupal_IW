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
      
        $linpeds= DB::table('linpeds')->where('pedido_id', $variable)->get();
        $productos = array();

        foreach($productosCarrito as $productoID){
            $producto = Producto::find($productoID->producto_id);
            array_push($productos, $producto);
        }

        $productos=DB::table('productos')->get();
        return view('listadoLinped', ['linpeds' => $linpeds]);
    }
    public function postLinpedBorrada(Request $request){
        $variable =$request->input('linped_id');    
        $linpeds = Linped::find($variable);
        $linpeds->delete();
        $linpeds=Linped::paginate(5);
        return view('listadoLinped', ['linpeds' => $linpeds]);
    }
}
