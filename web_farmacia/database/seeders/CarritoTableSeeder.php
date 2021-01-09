<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\User;
use DB;

class CarritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrito')->delete();
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'paracetamol')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id
        ]);
        
    }
}
