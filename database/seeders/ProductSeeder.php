<?php

namespace Database\Seeders;

use Illuminate\Support\facades\DB;
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
        DB::table('products')->insert([
            [
                'name'=>'OPPO Mobile',
                "price"=>"9000",
                "description"=> "good 4GB smartphone",
                "category"=>"mobile and electronics",
                "gallery"=>"https://www.livemint.com/lm-img/img/2023/08/01/1600x900/OPPO_A78_Design_1690887359510_1690887373489.jpg",
            ],
            [
                'name'=>'VIVO Mobile',
                "price"=>"12000",
                "description"=> "good 8GB smartphone",
                "category"=>"mobile and electronics",
                "gallery"=>"https://images.moneycontrol.com/static-mcnews/2023/03/vivo-v27-pro-156.jpg?impolicy=website&width=1600&height=900",
            ],

            [
                    'name'=>'SAMSUNG TV',
                    "price"=>"16000",
                    "description"=> "good television",
                    "category"=>"tv",
                    "gallery"=>"https://cdn1.smartprix.com/rx-ilcEIohGc-w1200-h1200/lcEIohGc.jpg",

            ],        

            [
                'name'=>'Panasonic Frigde',
                "price"=>"20000",
                "description"=> "good Aand powerful refrigerator",
                "category"=>"fridge",
                "gallery"=>"https://www.lg.com/in/images/refrigerators/md07547068/gallery/GL-T422VPZX-Refrigerators-Back-View-D01.jpg",
            ]
                

            

             
        ]);
    }
}
