<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();
        // factory(Order::class, 10)->create();
        DB::table('orders')->insert([
            'order_id' => 1,
            'user_id' => 1,
            'customer_id' => 1,
            'shipping' => 1,
            'payment' => 'FPX'
        ]);
    }
}
