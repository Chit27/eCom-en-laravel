<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo Mobile',
            'price'=>'10000',
            'description'=>'a smart phone with 8GB ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71wPwmxo2NL._SL1500_.jpg'

            ],
            [
                'name'=>'Samsung TV',
                'price'=>'10000',
                'description'=>'a smart tv with much more features',
                'category'=>'tv',
                'gallery'=>'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6331/6331762_sd.jpg'
    
            ],
            [
                'name'=>'LG TV',
                'price'=>'15000',
                'description'=>'a smart tv with much more features',
                'category'=>'tv',
                'gallery'=>'https://www.lg.com/ph/images/tvs/md06248096/U02_basic-350.jpg'
    
            ],
            [
                'name'=>'Panasonic Fridge',
                'price'=>'10000',
                'description'=>'a fridge with much more features',
                'category'=>'fridge',
                'gallery'=>'https://www.panasonic.com/content/dam/pim/my/en/NR/NR-BL3/NR-BL307VSMY/NR-BL307VSMY-Product_ImageGlobal-1_my_en.png'
    
            ]
        
        ]);
    }
}
