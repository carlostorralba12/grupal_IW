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
        $user->surname = 'superAdmin';
        $user->phone = '93332456';
        $user->typeUser = 'admin';
        $user->email = 'admin@admin';
        $user->password = Hash::make('admin');
        $user->adress = 'C/Admin';
        $user->save();

        $user2 = new User();
        $user2->name = 'usuario';
        $user2->surname = 'usuario';
        $user2->phone = '93332456';
        $user2->typeUser = 'normal';
        $user2->email = 'usuario@alu';
        $user2->password = Hash::make('usuario');
        $user2->adress = 'C/usuario';
        $user2->save();
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
