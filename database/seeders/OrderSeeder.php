<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'id' => 1,
            'user_id' => 1,
            'ebook_id' => 1,
            'order_date' => '2022-02-14'
        ]);

        Order::create([
            'id' => 2,
            'user_id' => 1,
            'ebook_id' => 2,
            'order_date' => '2022-02-15'
        ]);

        Order::create([
            'id' => 3,
            'user_id' => 1,
            'ebook_id' => 3,
            'order_date' => '2022-02-16'
        ]);

        Order::create([
            'id' => 4,
            'user_id' => 1,
            'ebook_id' => 4,
            'order_date' => '2022-02-17'
        ]);

        Order::create([
            'id' => 5,
            'user_id' => 1,
            'ebook_id' => 5,
            'order_date' => '2022-02-18'
        ]);
    }
}
