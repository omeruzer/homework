<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); 

        User::create([
            'name'=>'Cafe1',
            'email'=>"cafe1@gmail.com",
            'password' => Hash::make('asd'),
            'isAdmin'=>1
        ]);
        User::create([
            'name'=>'Cafe2',
            'email'=>"cafe2@gmail.com",
            'password' => Hash::make('asd'),
            'isAdmin'=>1
        ]);
        User::create([
            'name'=>'Cafe3',
            'email'=>"cafe3@gmail.com",
            'password' => Hash::make('asd'),
            'isAdmin'=>1
        ]);

        User::create([
            'scholl_no'=>12044171,
            'name'=>'Ömer Uzer',
            'email'=>"omeruzer@gmail.com",
            'password' => Hash::make('asd'),
            'isAdmin'=> 0
        ]);
    }
}
