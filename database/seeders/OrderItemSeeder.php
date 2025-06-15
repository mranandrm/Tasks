<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        OrderItem::create([
            'order_id' => 1,
            'product_id' => 1, // Laptop
            'quantity' => 1,
            'price' => 1200.00,
        ]);

        OrderItem::create([
            'order_id' => 1,
            'product_id' => 3, // Tablet
            'quantity' => 2,
            'price' => 800.00,
        ]);
    }
}
