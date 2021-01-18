<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
            'user_id' => User::where('email', 'admin@admin')->first()->id,
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'paracetamol')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id,
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'ibuprofeno')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'gelocatil')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'couldina')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'geniol')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'ibuprofeno')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id
        ]);
        
    }
}
