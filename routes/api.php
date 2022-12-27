<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\userPersonalInfoController;
use App\Http\Controllers\blogController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sign-up',[userController::class,'signup']);
Route::post('/log-in',[userController::class,'login']);
Route::post('/user-personal-info',[userPersonalInfoController::class,'saveUserPersonalInfo']);
Route::post('/blog-add',[blogController::class,'blogAdd']);