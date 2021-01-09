<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\User;
use DB;

class FavoritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favoritos')->delete();
        DB::table('favoritos')->insert([
            'producto_id' => Producto::where('nombre', 'ibuprofeno')->first()->id,
            'user_id' => User::where('email', 'admin@admin')->first()->id
        ]);
    }
}
