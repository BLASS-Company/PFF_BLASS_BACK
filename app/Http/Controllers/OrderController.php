<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Order;

class OrderController extends Controller
{
    //Display a list of all Catgories.
    public function listOrders()
    {
      return response()->json(Order::all());
    }

    //Store a new Order in the Database.
    public function addOrder(Request $req)
   {
      $order= new Order;
      $order->user_id = $req->input('user_id');
      $order->address = $req->input('address');
      $order->city = $req->input('city');
      $order->phone = $req->input('phone');
      $order->cb_number = $req->input('cb_number');
      $order->cb_name = $req->input('cb_name');
      $order->cb_code = $req->input('cb_code');
      $order->total_price = $req->input('total_price');
      $result=$order->save();

      $product_ids = $req->input('product_ids');
      $order->products()->attach($product_ids);

      return response()->json([
         'status' => (bool) $order,
         'message'=> $result ? 'The Order has been created succesfully' : 'We have encounter an error in the creation of the Order',
         $order,
      ]);
   }

   //Display the specified Order.
   public function showOrder($id)
   {
      return response()->json(Order::findOrFail($id));
   }

   //Update the specified Order in the Database.
   public function updateOrder(Request $req, $id)
   {
      $order= Order::find($id);
      $order->user_id = $req->input('user_id');
      $order->address = $req->input('address');
      $order->city = $req->input('city');
      $order->phone = $req->input('phone');
      $order->cb_number = $req->input('cb_number');
      $order->cb_name = $req->input('cb_name');
      $order->cb_code = $req->input('cb_code');
      $order->total_price = $req->input('total_price');
      $result=$order->save();

      $product_ids = $req->input('product_ids');
      $order->products()->attach($product_ids);
 
      return response()->json([
         'status' => (bool) $order,
         'message'=> $result ? 'The Order has been succesfully updated' : 'We have encounter an error in the updating of the Order',
         $order,
      ]);
   }

   //Update the specified Order in the Database.
   public function editOrder(Request $req, $id)
   {
      $order= Order::find($id);
      if($req->input('user_id')){
      $order->user_id=$req->input('user_id');
      }
      if($req->input('address')){
      $order->address=$req->input('address');
      }
      if($req->input('city')){
      $order->city=$req->input('city');
      }
      if($req->input('phone')){
      $order->phone=$req->input('phone');
      }
      if($req->input('cb_number')){
      $order->cb_number=$req->input('cb_number');
      }
      if($req->input('cb_name')){
      $order->cb_name = $req->input('cb_name');
      }
      if($req->input('cb_code')){
         $order->cb_code = $req->input('cb_code');
      }
      if($req->input('total_price')){
         $order->total_price = $req->input('total_price');
      }
      $result=$order->save();

      $product_ids = $req->input('product_ids');
      $order->products()->attach($product_ids);
      
      return response()->json([
         'status' => (bool) $order,
         'message'=> $result ? 'The Order has been succesfully updated' : 'We have encounter an error in the updating of the Order',
         $order
      ]);
   }

   //Remove the specified Order from the Database.
   public function deleteOrder($id)
   {
      $order= Order::find($id);
      $result=$order->delete();

      return response()->json([
         'status' => (bool) $order,
         'message'=> $result ? 'The Order has been succesfully deleted' : 'We have encounter an error in the delete of the Order'
      ]);
   }

    //Display a list of all Products that belongs to the Order.
    public function getProductsByOrder($id)
    {
        $order = Order::find($id);
        $products=$order->products;
        return $products;
    }
}
