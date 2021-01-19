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
        $subcategory->nombre = 'Subcategoria 1';
        $subcategory->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory->save();

        $subcategory2 = new Subcategoria();
        $subcategory2->nombre = 'Subcategoria 2';
        $subcategory2->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory2->save();

        $subcategory3 = new Subcategoria();
        $subcategory3->nombre = 'Subcategoria 3';
        $subcategory3->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory3->save();

        $subcategory4 = new Subcategoria();
        $subcategory4->nombre = 'Subcategoria 4';
        $subcategory4->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory4->save();

        $subcategory5 = new Subcategoria();
        $subcategory5->nombre = 'Subcategoria 5';
        $subcategory5->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory5->save();

        $subcategory6 = new Subcategoria();
        $subcategory6->nombre = 'Subcategoria 6';
        $subcategory6->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory6->save();

        $subcategory7 = new Subcategoria();
        $subcategory7->nombre = 'Subcategoria 7';
        $subcategory7->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory7->save();

        $subcategory8 = new Subcategoria();
        $subcategory8->nombre = 'Subcategoria 8';
        $subcategory8->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory8->save();

        $subcategory9 = new Subcategoria();
        $subcategory9->nombre = 'Subcategoria 9';
        $subcategory9->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory9->save();

        $subcategory10 = new Subcategoria();
        $subcategory10->nombre = 'Subcategoria 10';
        $subcategory10->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory10->save();

        $subcategory11 = new Subcategoria();
        $subcategory11->nombre = 'Subcategoria 11';
        $subcategory11->categoria_id = Categoria::where('nombreCategoria', 'categoria 1')->first()->id;
        $subcategory11->save();






    }
}
