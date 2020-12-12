<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $order= new Order;
        $order->user_id = 2;
        $order->address = "2020 chemin du fromage";
        $order->city = "vergeze";
        $order->phone = "06 59 03 46 87";
        $order->cb_number = "1234567891234567";
        $order->cb_name = "un nom";
        $order->cb_code = "123";
        $order->total_price = 51.57;
        $order->save();
        $product_ids = [1,2,3];
        $order->products()->attach($product_ids);

        //2
        $order= new Order;
        $order->user_id = 3;
        $order->address = "10 rue d'une rue";
        $order->city = "nimes";
        $order->phone = "04 39 03 46 87";
        $order->cb_number = "0125478963250483";
        $order->cb_name = "un autre nom";
        $order->cb_code = "156";
        $order->total_price = 193.8;
        $order->save();
        $product_ids = [4,5,6,7,8,9,10];
        $order->products()->attach($product_ids);

        //3
        $order= new Order;
        $order->user_id = 2;
        $order->address = "2020 chemin du fromage";
        $order->city = "vergeze";
        $order->phone = "06 59 03 46 87";
        $order->cb_number = "1234567891234567";
        $order->cb_name = "un nom";
        $order->cb_code = "123";
        $order->total_price = 62.2;
        $order->save();
        $product_ids = [11,12];
        $order->products()->attach($product_ids);
    }
}
