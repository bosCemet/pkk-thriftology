<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name"=> "Adinda",
            "price"=> 300000,
            "description"=>"sepatu gaul kesukaan anak sekena, kondisi well",
            "stock"=>1,
            "gender"=>"Unisex",
            "condition"=> "Used",
            "size"=> "L",
            "user_id"=> 1
        ]);
    }
}
