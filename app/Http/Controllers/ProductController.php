<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(Request $req)
    {
         $product= new Product;
         $product->name = $req->input('name');
         $product->description = $req->input('description');
         $product->image = $req->input('image');
         $product->price = $req->input('price');
         $product->stock = $req->input('stock');
         $result=$product->save();
 
         if($result)
         {
            $categoryids = $req->input('categoryids');
            $product->categories()->attach($categoryids);
            return ["Result"=>"Data has been saved"];
         }
         else
         {
            return ["Result"=>"operation failed"];
         }
    }
}
