<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $product= new Product;
        $product->name = "marwallou";
        $product->description = "le meilleur fromage que le nord ait jamais crée";
        $product->image = "";
        $product->price = 11.90;
        $product->stock = 67;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [1,2,5];
        $product->categories()->attach($category_ids);

        //2
        $product= new Product;
        $product->name = "chevrou";
        $product->description = "la meilleur bûche de chèvre que vous puissiez imaginer";
        $product->image = "https://images.unsplash.com/photo-1516643147509-4b3600367e0d?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1293&q=80";
        $product->price = 9.80;
        $product->stock = 50;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [1,2,4];
        $product->categories()->attach($category_ids);

        //3
        $product= new Product;
        $product->name = "brebious";
        $product->description = "5 fois vainqueur du meilleur fromage de brebis au monde";
        $product->image = "";
        $product->price = 30;
        $product->stock = 40;
        $product->measure_unit = "kg";
        $product->save();
        $category_ids = [2,5];
        $product->categories()->attach($category_ids);

        //4
        $product= new Product;
        $product->name = "el famoso";
        $product->description = "un assortiment de fromage si bon que vous ne pourrez plus vous en passer";
        $product->image = "";
        $product->price = 67.90;
        $product->stock = 25;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [1,2,3];
        $product->categories()->attach($category_ids);

        //5
        $product= new Product;
        $product->name = "yagurt";
        $product->description = "un yaourt si bon que même la laitière veut la recette";
        $product->image = "";
        $product->price = 1.30;
        $product->stock = 83;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [1,2,6];
        $product->categories()->attach($category_ids);

        //6
        $product= new Product;
        $product->name = "chevrette";
        $product->description = "excellent fromage de chèvre";
        $product->image = "";
        $product->price = 11.10;
        $product->stock = 32;
        $product->measure_unit = "kg";
        $product->save();
        $category_ids = [2,4];
        $product->categories()->attach($category_ids);

        //7
        $product= new Product;
        $product->name = "le marvello";
        $product->description = "un plateau de fromage parfait pour offrir";
        $product->image = "";
        $product->price = 77.80;
        $product->stock = 28;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [1,3];
        $product->categories()->attach($category_ids);

        //8
        $product= new Product;
        $product->name = "danote";
        $product->description = "un yaourt cremeux et onctueux";
        $product->image = "";
        $product->price = 1.40;
        $product->stock = 72;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [2,6];
        $product->categories()->attach($category_ids);

        //9
        $product= new Product;
        $product->name = "biquette";
        $product->description = "fromage de chèvre parfait pour des tartines grillées";
        $product->image = "";
        $product->price = 8.30;
        $product->stock = 47;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [4];
        $product->categories()->attach($category_ids);

        //10
        $product= new Product;
        $product->name = "brebete";
        $product->description = "fromage de brebis a partagé entre amis";
        $product->image = "";
        $product->price = 26;
        $product->stock = 37;
        $product->measure_unit = "kg";
        $product->save();
        $category_ids = [5];
        $product->categories()->attach($category_ids);

        //11
        $product= new Product;
        $product->name = "le familial";
        $product->description = "un plateau de fromage pour toute la famille";
        $product->image = "";
        $product->price = 61.30;
        $product->stock = 22;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [3];
        $product->categories()->attach($category_ids);

        //12
        $product= new Product;
        $product->name = "ativia";
        $product->description = "un yaourt bon pour le corps et la santé";
        $product->image = "";
        $product->price = 0.90;
        $product->stock = 73;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [6];
        $product->categories()->attach($category_ids);
    }
}
