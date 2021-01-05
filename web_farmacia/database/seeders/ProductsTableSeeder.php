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
        $producto1->imagen = 'images/paracetamol.jpeg';
    
        //$producto1->categoria()->associate(Categoria::where('nombre', 'categoria')->first());
        $producto1->subcategoria_id = Subcategoria::where('nombre', 'subcategoria')->first()->id;
        //$producto1->subcategoria()->associate(Subcategoria::where('nombre', 'subcategoria')->first());
        $producto1->save();


 
    }
}
