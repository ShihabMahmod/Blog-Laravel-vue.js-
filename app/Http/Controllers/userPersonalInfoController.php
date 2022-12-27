<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\userPersonalInfo;

class userPersonalInfoController extends Controller
{
    public function saveUserPersonalInfo(Request $req)
    {
        // $validate = Validator::make($req->all(),[

        //     'user_id' => 'required',
        //     'phone' => 'required|min:11|max:11',
        //     'address' => 'required|min:10|max:50'
        // ]);

        try{

            userPersonalInfo::create([
                'user_id' => $req->user_id,
                'phone' => $req->phone,
                'address' => $req->address
            ]);

        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'msg' => $e->getMessage()
            ]);
        }
    }
}
