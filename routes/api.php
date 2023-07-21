<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImagesController;
use App\Http\Controllers\SosialController;
use App\Http\Controllers\UserController;
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



Route::resource('user',UserController::class);
Route::post('login',[LoginController::class,'login']);

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::resource('about', AboutController::class);
    Route::resource('catagory',CatagoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('sosial',SosialController::class);
    Route::resource('image',ProductImagesController::class);
});

