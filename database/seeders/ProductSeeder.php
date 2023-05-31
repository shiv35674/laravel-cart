<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products=[
            [
                'name' => 'Apple',
                'details'=>'Macbook Pro',
                'description'=>'Lorem Ipsum',
                'brand'=>'Apple',
                'price'=>2499,
                'shipping_cost'=>25,
                'image_path'=>'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'details'=>'13.3 Inch',
                'description'=>'Lorem Ipsum',
                'brand'=>'Samsung',
                'price'=>1599,
                'shipping_cost'=>25,
                'image_path'=>'storage/product2.png'
            ]
        ];
        foreach($products as $key=>$value){
            Product::create($value);
        }
    }
}
