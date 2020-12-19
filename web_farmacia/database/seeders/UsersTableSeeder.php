<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $user->password = Hash::make('admin');
        $user->dni = '12345678H';
        $user->adress = 'C/Admin';
        $user->save();
        // Añadimos una entrada a esta tabla
        /*User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'dni' => '12345678H',
            'adress' => 'C/Admin',
            'password' => Hash::make('admin'),
        ]);*/
    }
}
