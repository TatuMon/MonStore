<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Item;
use \App\Models\Order;
use \App\Models\OrderItem;
use \App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Item::factory(5)->create();
        Order::factory(3)->create();
        OrderItem::factory(5)->create();
    }
}
