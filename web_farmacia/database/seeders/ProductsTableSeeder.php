<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DB;

use App\Models\Producto;
use App\Models\Subcategoria;

use Illuminate\Database\Eloquent\Collection;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        //DB::table('productos')->delete();
        $producto1 = new Producto();
        $producto1->nombre = 'paracetamol';
        $producto1->pvp = '5';
        $producto1->descripcionCorta = 'paracetamol para adultos';
        $producto1->descripcionLarga = 'medicamente que quita el dolor temporalmente';
        $producto1->referencia = '00000';
        $producto1->imagen = 'paracetamol.jpg';
        $producto1->subcategoria_id = Subcategoria::where('nombre', 'subcategoria 1')->first()->id;
        $producto1->save();

        $producto2 = new Producto();
        $producto2->nombre = 'ibuprofeno';
        $producto2->pvp = '5';
        $producto2->descripcionCorta = 'ibuprofeno para adultos';
        $producto2->descripcionLarga = 'medicamente que quita el dolor temporalmente';
        $producto2->referencia = '00001';
        $producto2->imagen = 'dalsy.jpg';
        $producto2->subcategoria_id = Subcategoria::where('nombre', 'subcategoria 1')->first()->id;
        $producto2->save();

        $producto3 = new Producto();
        $producto3->nombre = 'couldina';
        $producto3->pvp = '6';
        $producto3->descripcionCorta = 'couldina para adultos';
        $producto3->descripcionLarga = 'medicamente que quita el dolor temporalmente';
        $producto3->referencia = '00002';
        $producto3->imagen = 'couldina.jpg';
        $producto3->subcategoria_id = Subcategoria::where('nombre', 'subcategoria 1')->first()->id;
        $producto3->save();

        $producto4 = new Producto();
        $producto4->nombre = 'geniol';
        $producto4->pvp = '7';
        $producto4->descripcionCorta = 'geniol para adultos';
        $producto4->descripcionLarga = 'medicamente que quita el dolor temporalmente';
        $producto4->referencia = '00003';
        $producto4->imagen = 'geniol.jpg';
        $producto4->subcategoria_id = Subcategoria::where('nombre', 'subcategoria 1')->first()->id;
        $producto4->save();

        $producto5 = new Producto();
        $producto5->nombre = 'gelocatil';
        $producto5->pvp = '8';
        $producto5->descripcionCorta = 'gelocatil para adultos';
        $producto5->descripcionLarga = 'medicamente que quita el dolor temporalmente';
        $producto5->referencia = '00004';
        $producto5->imagen = 'gelocatil.jpg';
        $producto5->subcategoria_id = Subcategoria::where('nombre', 'subcategoria 1')->first()->id;
        $producto5->save();


 
    }
}
