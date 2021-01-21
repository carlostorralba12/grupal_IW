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
            'producto_id' => Producto::where('nombre', 'Vichy Dercos Champú Estimulante Anticaída (200 ml)')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id,
            'cantidad' => 2
        ]);

        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'Ducray Anaphase Champu Crema Estimulante (150 ml)')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id,
            'cantidad' => 1,
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'Just for Men Colorante en Champú H-25 Castaño Claro (30 ml)')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id,
            'cantidad' => 1,
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'Bioderma Nodé DS+ Champú Anticaspa (150 ml)')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id,
            'cantidad' => 1
        ]);
        DB::table('carrito')->insert([
            'producto_id' => Producto::where('nombre', 'LetiAT4 Champú Piel Atópica (250 ml)')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id,
            'cantidad' => 2
        ]);
        
    }
}
