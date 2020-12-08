<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;

class ProductController extends Controller
{
   //Display a list of all Products
   public function listProducts()
   {
      return response()->json(Product::all());
   }

   //Store a new Product in the Database.
   public function addProduct(Request $req)
   {
      $product= new Product;
      $product->name = $req->input('name');
      $product->description = $req->input('description');
      $product->image = $req->input('image');
      $product->price = $req->input('price');
      $product->stock = $req->input('stock');
      $product->measure_unit = $req->input('measure_unit');
      $result=$product->save();

      $category_ids = $req->input('category_ids');
      $product->categories()->attach($category_ids);

      return response()->json([
         'status' => (bool) $product,
         'message'=> $result ? 'The Product has been succesfully created' : 'We have encounter an error in the creation of the Product'
      ]);
   }

   //Display the specified Product
   public function showProduct($id)
   {
       
      return response()->json(Product::findOrFail($id));
       
   }

   //Update the specified Product in the Database.
   public function updateProduct(Request $req, $id)
   {
      $product= Product::find($id);
      $product->name=$req->input('name'); 
      $product->description=$req->input('description');
      $product->image=$req->input('image');
      $product->price=$req->input('price');
      $product->stock=$req->input('stock');
      $result=$product->save();

      $category_ids = $req->input('category_ids');
      $product->categories()->attach($category_ids);
      
      return response()->json([
         'status' => (bool) $product,
         'message'=> $result ? 'The Product has been succesfully updated' : 'We have encounter an error in the updating of the Product'
      ]);
   }

   //Remove the specified Product from the Database.
   public function deleteProduct($id)
   {
      $product= Product::find($id);
      $result=$product->delete();

      return response()->json([
         'status' => (bool) $product,
         'message'=> $result ? 'The Product has been succesfully deleted' : 'We have encounter an error in the delete of the Product'
      ]);
   }
}
