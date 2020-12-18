<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Producto;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto1 = new Producto();
        $producto1->nombre = 'paracetamol';
        $producto1->pvp = '5';
        $producto1->descripcion = 'paracetamol para adultos';
        $producto1->url = 'images/paracetamol.jpeg';
        $producto1->save();
    }
}
