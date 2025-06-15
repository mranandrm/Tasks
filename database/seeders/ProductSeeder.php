<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $products = [
        ['name' => 'Laptop', 'description' => 'High-end laptop', 'price' => 1200.00, 'stock' => 15],
        ['name' => 'Phone', 'description' => 'Smartphone', 'price' => 800.00, 'stock' => 8],
        ['name' => 'Tablet', 'description' => 'Android tablet', 'price' => 400.00, 'stock' => 20],
    ];

    foreach ($products as $product) {
        Product::create($product); 
    }
    }
}
