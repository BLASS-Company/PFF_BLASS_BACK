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
        $product->image = "https://images.unsplash.com/photo-1486297678162-eb2a19b0a32d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1353&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1517999586990-2126f2b0c97d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1541529086526-db283c563270?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1574473322441-dae4fd56feef?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1558221693-89a565d7ecd8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1561339429-d5da4e6e9105?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1564149503905-7fef56abc1f2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1529312266912-b33cfce2eefd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1599932677968-877d85f64a12?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=618&q=80";
        $product->price = 26;
        $product->stock = 37;
        $product->measure_unit = "kg";
        $product->save();
        $category_ids = [5];
        $product->categories()->attach($category_ids);

        //11
        $product= new Product;
        $product->name = "le classico";
        $product->description = "un plateau de fromage parfait pour une soirée tranquille";
        $product->image = "https://images.unsplash.com/photo-1551790629-9d5c2d781d8b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1399&q=80";
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
        $product->image = "https://images.unsplash.com/photo-1562114808-b4b33cf60f4f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80";
        $product->price = 0.90;
        $product->stock = 73;
        $product->measure_unit = "pièce";
        $product->save();
        $category_ids = [6];
        $product->categories()->attach($category_ids);
    }
}
