<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); 

        for ($i=0; $i < 100 ; $i++) { 
            Product::create([
                'img'=>'https://us.123rf.com/450wm/alexskp/alexskp2003/alexskp200300082/143499095-fresh-tasty-burger-isolated-on-white.jpg?ver=6',
                'category_id'=>rand(1,50),
                'shop_id'=>rand(1,3),
                'name'=> $faker->name(),
                'price'=>$faker->randomFloat(3,1,50),
            ]);
        }
    }
}
