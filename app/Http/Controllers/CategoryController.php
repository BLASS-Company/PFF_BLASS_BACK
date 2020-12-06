<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategory()
    {
        return Category::all();
    }

    public function addCategory(Request $req)
   {
        $category= new Category;
        $category->name = $req->input('name');
        $result=$category->save();

        if($result)
        {
            return ["Result"=>"Data has been saved"];
        }
        else
        {
            return ["Result"=>"operation failed"];
        }
   }
}
