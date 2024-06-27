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
        $products = [
            [
                'name' => 'Nascar',
                'description' => 'Witwew',
                'price' => 22200.00,
                'image' => 'https://i.pinimg.com/736x/12/96/54/12965426be038ba5ebad65fabe13fe04.jpg',
                'quantity' => 10,
            ],
            [
                'name' => 'Nascar Vintage',
                'description' => 'Aguroy',
                'price' => 13220.00,
                'image' => 'https://i.ebayimg.com/images/g/q90AAOSwaZdmAW-Y/s-l400.jpg',
                'quantity' => 20,
            ],
            [
                'name' => 'SamJH Design Jeff Gordon #24 Pepsi Dupont Racing Vintage Rare',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://i.ebayimg.com/images/g/N2EAAOSw8p9j9RQd/s-l1200.jpg',
                'quantity' => 15,
            ],
            [
                'name' => 'The 2001 Jeff Gordon 4 time champion Nascar Jacket',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFOby8PQHV9ythwnyjGKFc-11Nq-Iag81jA&s',
                'quantity' => 25,
            ],
            [
                'name' => 'Liquid Blue Shirts',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8wlDxP-AJukfwtFHn82NgWPxzQM-MjZUicw&s',
                'quantity' => 5,
            ],
            [
                'name' => 'VTG 2000 LIQUID BLUE VINTAGE TIE DYE',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://i.ebayimg.com/images/g/a0IAAOSw8Stfx83R/s-l1600.jpg',
                'quantity' => 30,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
