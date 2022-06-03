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

        for ($i=0; $i < 50 ; $i++) { 
            User::create([
                'scholl_no'=>rand(3000,10000),
                'name'=>$faker->name(),
                'email'=>$faker->email(),
                'password' => Hash::make('asd'),
            ]);
        }

        User::create([
            'scholl_no'=>12044171,
            'name'=>'Ömer Uzer',
            'email'=>"omeruzer@gmail.com",
            'password' => Hash::make('asd'),
        ]);
    }
}
