<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'lolita',
            'email' => 'admin123@admin.com',
            'password' => Hash::make('123')

        ])->assignRole('administrador');

        User::create([
            'name' => 'sofia',
            'email' => 'sofia29@gmail.com',
            'password' => Hash::make('sofia29')

        ])->assignRole('usuario');

        User::create([
            'name' => 'juan',
            'email' => 'juan02@gmail.com',
            'password' => Hash::make('juan02')

        ])->assignRole('superadministrador');
    }
}
