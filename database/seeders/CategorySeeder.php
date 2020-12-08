<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=>'cadeaux',
        ]);
        DB::table('categories')->insert([
            'name'=>'selection',
        ]);
        DB::table('categories')->insert([
            'name'=>'plateaux',
        ]);
        DB::table('categories')->insert([
            'name'=>'chèvre',
        ]);
        DB::table('categories')->insert([
            'name'=>'brebis',
        ]);
        DB::table('categories')->insert([
            'name'=>'yaourt',
        ]);
    }
}
