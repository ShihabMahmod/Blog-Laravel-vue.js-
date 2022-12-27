<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Hash;
use Auth;

class userController extends Controller
{
    public function signup(Request $req)
    {
        // Validator::make($req->all(),[
        //     'name' => 'required|min:3|max:30',
        //     'email' => 'required|email',
        //     'password' => 'required|min:5|max:10'
        // ]);
        
        try{
            User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => bcrypt($req->password)
            ]);
            return response()->json([
                'success' => true,
                'msg' => "Youre Account created successfully"
            ]);
        }catch(\Excepttioon $e){
            return response()->json([
                'success' => false,
                'msg' => $e->getMessage()
            ]);
        }
    }
    public function login(Request $req)
    {
        try{

            $userCredantial = [
                'email' => $req->email,
                'password' => $req->password
            ];

            if(Auth::attempt($userCredantial)){
                return response()->json([
                    'success' => true,
                    'user_data' => Auth::User()
                ]);
            }

        }catch(\Exception $e){

        }
    }
}
