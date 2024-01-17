<?php

use App\Http\Controllers\TravelsController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("test",[function(Request $request)
{
    return ("hello");
}]);

//route::post('VerifyEmail',[UserInfoController::class,'VerifyEmail']);
//route::get('travels/{id}',[TravelsController::class,'show']);
route::get('travels/{id}',[TravelsController::class,'index']);
route::get('user/{id}',[TravelsController::class,'showuser']);
route::post('travelsStore',[TravelsController::class,'store']);
route::post('TravelsUpdate/{id}',[TravelsController::class,'update']);
route::post('travelsDelete/{id}',[TravelsController::class,'destroy']);



//Admin routes
route::prefix('Admin')->middleware('auth:sanctum')->group(function(){
route::post('TravelsShow',[Admin\TravelsController::class,'store']);
route::post('TourCreate',[Admin\TourController::class,'store']);
});
route::post('Login',[Auth\LoginController::class,'__invoke']);
