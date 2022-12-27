<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{
    public function blogAdd(Request $req)
    {
            try{

                Blog::create([

                    'user_id' => $req->user_id,
                    'heading' => $req->heading,
                    'blog' => $req->blog,
                    'image' => $req->image

                ]);
                return response()->json([
                    'success' => true,
                    'msg' => "Your blog has been added"
                ]);


            }catch(\Exceptioon $e){

                return response()->json([
                    'success' => true,
                    'msg' => "Your blog has no added"
                ]);
            }
    }
}
