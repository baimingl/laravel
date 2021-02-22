<?php

use App\Order as Order;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'name' => '张三1',
            'email' => 'asd@qq.com',
            'addr' => '北京',
            'frequency' => 1,
            'amount' => 0.1,
            'status' => 1,
            'start_time' => 12234432,
            'end_time' => 12323123,
        ]);
//        factory(\App\Order::class,100)->create();
    }
}
