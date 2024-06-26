<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LongController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Mehtod http
//Get,post,put,delete,patch
//base url đường dẫn gốc
// Route::get('/',function(){
//     echo "Tranng chủ";
// });
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/list-products', [ProductController::class,'showProduct'] );
//Slug và Params
//slug:http://127.0.0.1:8000/list-products/1
// Route::get('/list-products/{id}', [ProductController::class,'getProduct'] );
// //Params:http://127.0.0.1:8000/update-products?id=1
// Route::get('/update-products', [ProductController::class,'updateProduct'] );
Route::get('/thongtinsv',[LongController::class,'nguyenHoangLong']);