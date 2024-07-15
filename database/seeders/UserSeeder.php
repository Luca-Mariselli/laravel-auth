<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [

            0 => [
                'name' => 'Antonio',
                'email' => 'antonio@dattolo.it',
                'password' => Hash::make('123456')
            ],
            1 =>   [
                'name' => 'Luca',
                'email' => 'luca@mariselli.it',
                'password' => Hash::make('123456')
            ],
            2 =>  [
                'name' => 'Giacomo',
                'email' => 'giacomo@spadoni.it',
                'password' => Hash::make('123456')
            ],

        ];
        for ($i = 0; $i < count($admin); $i++) {
            $user = User::create($admin[$i], [
                'name' => $admin[$i]['name'],
                'email' => $admin[$i]['email'],
                'password' => $admin[$i]['password'],
            ]);
            $user->save();
        };
    }
}
