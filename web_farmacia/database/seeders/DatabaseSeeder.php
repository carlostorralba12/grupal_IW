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
        $this->call(ProductsTableSeeder::class);
        // Llamamos a otro fichero de semillas
        $this->call(UsersTableSeeder::class);
        // Mostramos información por consola
        $this->command->info('User table seeded!' );

    }
}
