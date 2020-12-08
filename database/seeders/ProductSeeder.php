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
            'price'=>'11,90€/unité',
            'stock'=>'67',
            'category_ids'=>[1,2,5]
        ]);

        DB::table('products')->insert([
            'name'=>'chevrou',
            'description'=>'la meilleur bûche de chèvre que vous puissiez imaginer',
            'image'=>'chevrou',
            'price'=>'9,80€/unité',
            'stock'=>'50',
            'category_ids'=>[1,2,4]
        ]);

        DB::table('products')->insert([
            'name'=>'brebious',
            'description'=>'5 fois vainqueur du meilleur fromage de brebis au monde',
            'image'=>'brebious',
            'price'=>'30€/kg',
            'stock'=>'40kg',
            'category_ids'=>[1,2,5]
        ]);
        
        DB::table('products')->insert([
            'name'=>'el famoso',
            'description'=>'un assortiment de fromage si bon que vous ne pourrez plus vous en passer',
            'image'=>'el_famoso',
            'price'=>'67,90€',
            'stock'=>'25',
            'category_ids'=>[1,3]
        ]);
        
        DB::table('products')->insert([
            'name'=>'yagurt',
            'description'=>'un yaourt si bon que même la laitière veut la recette',
            'image'=>'yagurt',
            'price'=>'1.30€/unité',
            'stock'=>'83',
            'category_ids'=>[6]
        ]);
    }
}
