<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class Controller
{
    public function register_user(Request $request){

        $user_exist = User::where("email",$request->post("email"))->first();
        
        if($user_exist){

            return response()->json([

                "success" => true,

                "message" => "User Already Exist!"

            ],200);

        }

        $user = new User;

        $user->name = $request->post("username");
        
        $user->email = $request->post("email");
        
        $user->password = Hash::make($request->post("password"));
        
        if($user->save()){

            return response()->json([

                "success" => true,

                "message" => "You're successfully registered!"

            ],200);

        }else{

            return response()->json([

                "success" => false,

                "message" => "Something went wrong!"

            ],200);

        }
    }

    public function login_user(Request $request){

        $email = $request->post("email");

        $password = $request->post("password");

        $user_exist = User::where("email",$request->post("email"))->first();
        
        if(!$user_exist){

            return response()->json([

                "success" => true,

                "message" => "Invalid Credentials!"

            ],200);

        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return response()->json([
                
                "success" => true,
                
                "message" => "Login Successful!"
                
            ],200);
            
        }
            else{

            return response()->json([

                "success" => false,

                "message" => "Invalid Credentials!"

            ],200);

        }

    }

    public function dashboard(){

        $users = User::all();

        return view('dashboard',compact('users'));

    }
    
}
