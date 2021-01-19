<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\User;
use App\Models\Linped;
use App\Models\Producto;
use DB;
use DateTime;

class LinpedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('linpeds')->delete();
        $productos = DB::table('productos')->get();
        $pedidos = DB::table('pedidos')->get();

        foreach($productos as $j){
            foreach($pedidos as $p){
                switch($j->id){
                    case 1:
                        if($p->id == 1){
                            $linped = new Linped();
                            $linped->importe = Producto::find(1)->pvp;
                            $linped->cantidad = 1;
                            $linped->producto_id = $j->id;
                            $linped->pedido_id = $p->id;
                            $linped->save();
                        }
                    break;
                    case 2:
                        if($p->id == 2){
                            $linped = new Linped();
                            $linped->importe = Producto::find(2)->pvp;
                            $linped->cantidad = 1;
                            $linped->producto_id = $j->id;
                            $linped->pedido_id = $p->id;
                            $linped->save();
                        }
                    break;
                    case 3:
                        if($p->id == 3){
                            $linped = new Linped();
                            $linped->importe = Producto::find(3)->pvp;
                            $linped->cantidad = 1;
                            $linped->producto_id = $j->id;
                            $linped->pedido_id = $p->id;
                            $linped->save();
                        }
                    break;
                    case 4:
                        if($p->id == 4){
                            $linped = new Linped();
                            $linped->importe = Producto::find(4)->pvp;
                            $linped->cantidad = 4;
                            $linped->producto_id = $j->id;
                            $linped->pedido_id = $p->id;
                            $linped->save();
                        }
                    break;
                    case 5:
                        if($p->id == 5){
                            $linped = new Linped();
                            $linped->importe = Producto::find(5)->pvp;
                            $linped->cantidad = 1;
                            $linped->producto_id = $j->id;
                            $linped->pedido_id = $p->id;
                            $linped->save();
                        }
                    break;
                   
                    default:
                }
            }
        }  
    }
}
