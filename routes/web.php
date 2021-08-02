<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('products',[ProductController::class,'show']);
// Route::get('products',[ProductController::class,'index']);
Route::get('product_create',[ProductController::class,'create']);
Route::get('products/{id}',[ProductController::class,'destroy']);
Route::post('products',[ProductController::class,'store']);
Route::get('product_edit/{id}',[ProductController::class,'edit']);
Route::post('/product_update/{id}',[ProductController::class,'update']);

