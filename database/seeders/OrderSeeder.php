<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        Order::create([
            'user_id' => 1,
            'total_price' => 2000.00,
            'status' => 'paid',
        ]);
    }
}
