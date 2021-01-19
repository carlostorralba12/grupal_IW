<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use Illuminate\Database\Eloquent\Collection;
use App\Models\Pedido;
use App\Models\User;
use DB;
use DateTime;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->get();
        $date = new DateTime();
   

            foreach($users as $u){
                Pedido::create([
                    'numpedido' => ($u->id) + 1,
                    'fecha' => $date->format('d-m-Y'),
                    'estado' => "pendiente",
                    'user_id' => $u->id,
                ]);
            }
    }
}
