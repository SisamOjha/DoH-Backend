<?php

use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\HospitalController;
use App\Http\Controllers\Api\TokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register',[TokenController::class,'register']);
Route::post('login',[TokenController::class,'login']);
Route::resource('hospitals', HospitalController::class);

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::resource('doctors', DoctorController::class);
    Route::resource('productimages', ProductImagesController::class);
});
