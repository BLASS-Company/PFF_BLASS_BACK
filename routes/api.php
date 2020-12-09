<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//route product:
Route::get("products",[ProductController::class,'listProducts']);
 
Route::post("product",[ProductController::class,'addProduct']);
 
Route::put("product/{id}",[ProductController::class,'updateProduct']);
 
Route::delete("product/{id}",[ProductController::class,'deleteProduct']);
 
Route::get("product/{id}",[ProductController::class,'showProduct']);

// Route::get("{id}",[CategoryController::class,'getAllProductsByCategory']);

//route category:
Route::get("categories",[CategoryController::class,'listCategories']);

Route::post("category",[CategoryController::class,'addCategory']);

Route::put("category/{id}",[CategoryController::class,'updateCategory']);

Route::delete("category/{id}",[CategoryController::class,'deleteCategory']);

Route::get("category/{id}",[CategoryController::class,'showCategory']);

//Oauth2
Route::post("register",[AuthController::class,'register']);
Route::post("login",[AuthController::class,'login']);
