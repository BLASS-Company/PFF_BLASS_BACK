<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'marwallou',
            'description'=>'le meilleur fromage que le nord ait jamais crée',
            'image'=>'marwallou',
            'price'=>11.90,
            'stock'=>67,
            'measure_unit'=>'pièce'
        ]);

        DB::table('products')->insert([
            'name'=>'chevrou',
            'description'=>'la meilleur bûche de chèvre que vous puissiez imaginer',
            'image'=>'chevrou',
            'price'=>9.80,
            'stock'=>50,
            'measure_unit'=>'pièce'
        ]);

        DB::table('products')->insert([
            'name'=>'brebious',
            'description'=>'5 fois vainqueur du meilleur fromage de brebis au monde',
            'image'=>'brebious',
            'price'=>30,
            'stock'=>40,
            'measure_unit'=>'kg'
        ]);
        
        DB::table('products')->insert([
            'name'=>'el famoso',
            'description'=>'un assortiment de fromage si bon que vous ne pourrez plus vous en passer',
            'image'=>'el_famoso',
            'price'=>67.90,
            'stock'=>25,
            'measure_unit'=>'pièce'
        ]);
        
        DB::table('products')->insert([
            'name'=>'yagurt',
            'description'=>'un yaourt si bon que même la laitière veut la recette',
            'image'=>'yagurt',
            'price'=>1.30,
            'stock'=>83,
            'measure_unit'=>'pièce'
        ]);
    }
}
