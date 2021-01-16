<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Categoria();
        $category->nombreCategoria = 'categoria 1';
        $category->save();

        $category2 = new Categoria();
        $category2->nombreCategoria = 'categoria 2';
        $category2->save();

        $category3 = new Categoria();
        $category3->nombreCategoria = 'categoria 3';
        $category3->save();

        $category4 = new Categoria();
        $category4->nombreCategoria = 'categoria 4';
        $category4->save();

        $category5 = new Categoria();
        $category5->nombreCategoria = 'categoria 5';
        $category5->save();

        $category6 = new Categoria();
        $category6->nombreCategoria = 'categoria 6';
        $category6->save();

        $category7 = new Categoria();
        $category7->nombreCategoria = 'categoria 7';
        $category7->save();

        $category8 = new Categoria();
        $category8->nombreCategoria = 'categoria 8';
        $category8->save();

        $category9 = new Categoria();
        $category9->nombreCategoria = 'categoria 9';
        $category9->save();

        $category10 = new Categoria();
        $category10->nombreCategoria = 'categoria 10';
        $category10->save();

        $category11 = new Categoria();
        $category11->nombreCategoria = 'categoria 11';
        $category11->save();




    }
}
