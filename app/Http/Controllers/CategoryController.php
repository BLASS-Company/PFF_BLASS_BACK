<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //Display a list of all Catgories.
    public function listCategories()
    {
      return response()->json(Category::all());
    }

    //Store a new Category in the Database.
    public function addCategory(Request $req)
   {
      $category= new Category;
      $category->name = $req->input('name');
      $result=$category->save();

      return response()->json([
         'status' => (bool) $category,
         'message'=> $result ? 'The Category has been created succesfully' : 'We have encounter an error in the creation of the Category',
         $category,
      ]);
   }

   //Display the specified Category.
   public function showCategory($id)
   {
      return response()->json(Category::findOrFail($id));
   }

   //Update the specified Category in the Database.
   public function updateCategory(Request $req, $id)
   {
      $category= Category::find($id);
      $category->name=$req->input('name');
      $result=$category->save();
 
      return response()->json([
         'status' => (bool) $category,
         'message'=> $result ? 'The Category has been succesfully updated' : 'We have encounter an error in the updating of the Category'
      ]);
   }

   //Remove the specified Category from the Database.
   public function deleteCategory($id)
   {
      $category= Category::find($id);
      $result=$category->delete();

      return response()->json([
         'status' => (bool) $category,
         'message'=> $result ? 'The Category has been succesfully deleted' : 'We have encounter an error in the delete of the Category'
      ]);
   }

   //Display a list of all Products that belongs to the Category
   public function getAllProductsByCategory($id)
   {
      $category = Category::find($id);
      $products=$category->products;
      return $products;
   }
}
