<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CarritoTableSeeder::class);
        $this->call(FavoritosTableSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(LinpedSeeder::class);

    }
}
