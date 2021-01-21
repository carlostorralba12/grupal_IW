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
        $category->nombreCategoria = 'Cosmética y Belleza';
        $category->save();

        $category2 = new Categoria();
        $category2->nombreCategoria = 'Perfumería';
        $category2->save();

        $category3 = new Categoria();
        $category3->nombreCategoria = 'Higiene y Salud';
        $category3->save();

        $category4 = new Categoria();
        $category4->nombreCategoria = 'Nutrición';
        $category4->save();

        $category5 = new Categoria();
        $category5->nombreCategoria = 'Infantil';
        $category5->save();

        $category6 = new Categoria();
        $category6->nombreCategoria = 'Óptica';
        $category6->save();

        $category7 = new Categoria();
        $category7->nombreCategoria = 'Ortopedia';
        $category7->save();

        $category8 = new Categoria();
        $category8->nombreCategoria = 'Herbolario';
        $category8->save();

        $category9 = new Categoria();
        $category9->nombreCategoria = 'Medicamentos';
        $category9->save();

        $category10 = new Categoria();
        $category10->nombreCategoria = 'Dental';
        $category10->save();

        $category11 = new Categoria();
        $category11->nombreCategoria = 'Vida íntima';
        $category11->save();

        $category12 = new Categoria();
        $category12->nombreCategoria = 'Parafarmacia';
        $category12->save();




    }
}
