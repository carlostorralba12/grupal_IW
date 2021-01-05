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
        $category->nombre = 'categoria 1';
        $category->save();

        $category2 = new Categoria();
        $category2->nombre = 'categoria 2';
        $category2->save();

        $category3 = new Categoria();
        $category3->nombre = 'categoria 3';
        $category3->save();

        $category4 = new Categoria();
        $category4->nombre = 'categoria 4';
        $category4->save();

        $category5 = new Categoria();
        $category5->nombre = 'categoria 5';
        $category5->save();

        $category6 = new Categoria();
        $category6->nombre = 'categoria 6';
        $category6->save();

        $category7 = new Categoria();
        $category7->nombre = 'categoria 7';
        $category7->save();

        $category8 = new Categoria();
        $category8->nombre = 'categoria 8';
        $category8->save();

        $category9 = new Categoria();
        $category9->nombre = 'categoria 9';
        $category9->save();

        $category10 = new Categoria();
        $category10->nombre = 'categoria 10';
        $category10->save();

        $category11 = new Categoria();
        $category11->nombre = 'categoria 11';
        $category11->save();




    }
}
