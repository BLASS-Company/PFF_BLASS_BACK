<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends BaseController

{

    /**

     * Register api

     *

     * @return \Illuminate\Http\Response

     */

    public function register(Request $request)

    {

        $validator = Validator::make($request->all(), [

            'name' => 'required|unique:users',

            'email' => 'required|email|unique:users',

            'password' => 'required',
        ]);

   

        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());       

        }

   

        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $success['token'] =  $user->createToken('MyApp')->accessToken;

        $success['name'] =  $user->name;

        $sucess['admin'] = $user->admin;

   

        return $this->sendResponse($success, 'User register successfully.');

    }

   

    /**

     * Login api

     *

     * @return \Illuminate\Http\Response

     */

    public function login(Request $request)

    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 

            $user = Auth::user(); 

            if ($user->admin == 1) {
                $request->request->add([
                    'scope' => 'admin'
                ]);
            }

            $success['token'] =  $user->createToken('MyApp')->accessToken; 

   

            return $this->sendResponse($success, 'User login successfully.');

        } 

        else{ 

            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);

        } 

    }

    //Display a list of all Users
    public function listUsers()
    {
        return response()->json(User::all());
    }

    //Display the specified User
    public function showUser($id)
    {
        
        return response()->json(User::findOrFail($id));
        
    }

    //Update the specified User in the Database.
    public function updateUser(Request $req, $id)
    {
        $user= User::find($id);
        $user->name=$req->input('name'); 
        $user->email=$req->input('email');
        $user->admin=$req->input('admin');
        $result=$user->save();
        
        return response()->json([
            'status' => (bool) $user,
            'message'=> $result ? 'The User has been succesfully updated' : 'We have encounter an error in the updating of the User',
            $user
        ]);
    }

    //Update the specified User in the Database.
    public function editUser(Request $req, $id)
    {
        $user= User::find($id);
        if($req->input('name')){
        $user->name=$req->input('name');
        }
        if($req->input('email')){
        $user->email=$req->input('email');
        }
        if($req->input('admin')){
        $user->admin=$req->input('admin');
        $user->createToken('MyApp')->accessToken; 
        }
        $result=$user->save();
        
        return response()->json([
            'status' => (bool) $user,
            'message'=> $result ? 'The User has been succesfully updated' : 'We have encounter an error in the updating of the User',
            $user
        ]);
    }

    //Remove the specified User from the Database.
    public function deleteUser($id)
    {
        $user= User::find($id);
        $result=$user->delete();

        return response()->json([
            'status' => (bool) $user,
            'message'=> $result ? 'The User has been succesfully deleted' : 'We have encounter an error in the delete of the User'
        ]);
    }

}


// class UserController extends Controller
// {
//     //
//     function list()
//    {
//        return User::all();
//    }
 
   


// function update(Request $req)
// {
//     $products= User::find($req->id);
//     $products->name=$req->input('name'); 
//     $products->description=$req->input('description');
//     $products->image=$req->input('image');
//     $products->prix=$req->input('prix');
//     $products->stock=$req->input('stock');
 
//     $result=$products->save();
//     if($result)
//     {
//         return ["Result"=>"Data has been updated"];
//     }
//     else
//     {
//         return ["Result"=>"updated operation has been failed"];
//     }
// }
// function delete($id)
// {
//     $products= User::find($id);
//     $result=$products->delete();
//     if($result)
//     {
//     return ["Result"=>"Data has been updated"];
//     }
//     else
//     {
//         return ["Result"=>"delete operation has been failed"];
//     }
// }
// function search($name)
// {
//     return User::where("name","like","%".$name."%")->get();
// }

  

// }
