<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\AuthController;

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
 
Route::post("product",[ProductController::class,'addProduct'])->middleware('auth:api', 'admin');
 
Route::put("product/{id}",[ProductController::class,'updateProduct'])->middleware('auth:api', 'admin');

Route::patch("product/{id}",[ProductController::class,'editProduct'])->middleware('auth:api', 'admin');
 
Route::delete("product/{id}",[ProductController::class,'deleteProduct'])->middleware('auth:api', 'admin');
 
Route::get("product/{id}",[ProductController::class,'showProduct']);

Route::get("products_category/{id}",[CategoryController::class,'getProductsByCategory']);

Route::get("products_order/{id}",[OrderController::class,'getProductsByOrder']);

//route category:
Route::get("categories",[CategoryController::class,'listCategories']);

Route::post("category",[CategoryController::class,'addCategory'])->middleware('auth:api', 'admin');

Route::put("category/{id}",[CategoryController::class,'updateCategory'])->middleware('auth:api', 'admin');

Route::delete("category/{id}",[CategoryController::class,'deleteCategory'])->middleware('auth:api', 'admin');

Route::get("category/{id}",[CategoryController::class,'showCategory']);

//route order:
Route::get("orders",[OrderController::class,'listOrders'])->middleware('auth:api', 'admin');
 
Route::post("order",[OrderController::class,'addOrder'])->middleware('auth:api');
 
Route::put("order/{id}",[OrderController::class,'updateOrder'])->middleware('auth:api', 'admin');

Route::patch("order/{id}",[OrderController::class,'editOrder'])->middleware('auth:api', 'admin');
 
Route::delete("order/{id}",[OrderController::class,'deleteOrder'])->middleware('auth:api', 'admin');
 
Route::get("order/{id}",[OrderController::class,'showOrder'])->middleware('auth:api');


//route users with Oauth2
Route::post("register",[UserController::class,'register']);

Route::post("login",[UserController::class,'login']);

Route::get("users", [UserController::class, 'listUsers'])->middleware('auth:api', 'admin');

Route::put("user/{id}",[UserController::class,'updateUser'])->middleware('auth:api');

Route::patch("user/{id}",[UserController::class,'editUser'])->middleware('auth:api');
 
Route::delete("user/{id}",[UserController::class,'deleteUser'])->middleware('auth:api');
 
Route::get("user/{id}",[UserController::class,'showUser'])->middleware('auth:api');
