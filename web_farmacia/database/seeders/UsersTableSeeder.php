<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin';
        $user->password = 'admin';
        $user->dni = '12345678H';
        $user->adress = 'C/Admin';

        $user->save();
    }
}
