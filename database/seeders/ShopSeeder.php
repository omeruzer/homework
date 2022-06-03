<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); 
        
        for ($i=0; $i < 10 ; $i++) { 
            Shop::create([
                'img'=>"https://www.dunyaatlasi.com/wp-content/uploads/2018/09/resim-tablo-nasil-okunur-1280x720.jpg",
                'email'=>$faker->email(),
                'password'=>Hash::make('asd'),
                'name'=>$faker->name,
                'desc'=>$faker->sentence(5),
            ]);
        }
    }
}
