<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategoria;
use App\Models\Categoria;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = new Subcategoria();
        $subcategory->nombre = 'Subcategoria';
        $subcategory->categoria_id = Categoria::where('nombre', 'categoria 1')->first()->id;
        $subcategory->save();
    }
}
