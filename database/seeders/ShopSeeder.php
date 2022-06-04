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

        Shop::create([
            'img' => "https://www.dunyaatlasi.com/wp-content/uploads/2018/09/resim-tablo-nasil-okunur-1280x720.jpg",
            'user_id' => 1,
            'name' => 'cafe1',
            'desc' => 'cafe1',
        ]);
        Shop::create([
            'img' => "https://www.dunyaatlasi.com/wp-content/uploads/2018/09/resim-tablo-nasil-okunur-1280x720.jpg",
            'user_id' =>2,
            'name' => 'cafe2',
            'desc' => 'cafe2',
        ]);
        Shop::create([
            'img' => "https://www.dunyaatlasi.com/wp-content/uploads/2018/09/resim-tablo-nasil-okunur-1280x720.jpg",
            'user_id' => 3,
            'name' => 'cafe3',
            'desc' => 'cafe3',
        ]);
    }
}
