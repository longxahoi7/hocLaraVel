<?php

use App\Http\Controllers\ProController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ProductsController;

// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */
//Mehtod http
//Get,post,put,delete,patch
//base url đường dẫn gốc
// Route::get('/',function(){
//     echo "Tranng chủ";
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/list-products', [ProductController::class, 'showProduct']);
// //Slug và Params
// //slug:http://127.0.0.1:8000/list-products/1
// Route::get('/list-products/{id}', [ProductController::class, 'getProduct']);
// // //Params:http://127.0.0.1:8000/update-products?id=1
// Route::get('/update-products', [ProductController::class, 'updateProduct']);
// Route::get('/thongtinsv', [LongController::class, 'nguyenHoangLong']);
// Route::group([
//     'prefix' => 'user',
//     'as'=>'user.',
// ], function () {
//     Route::get('/list-users',[UserController::class,'listUsers'])->name('list-user');
//     Route::get('/add-users',[UserController::class,'createUser'])->name('add-users');
//     Route::post('/add', [UserController::class,'addUsers'])->name('postUser');
//     Route::get('/delete/{id}', [UserController::class,'removeUsers'])->name('removeUser');
//     Route::get('/detail/{id}', [UserController::class,'detailUsers'])->name('detailUser');
//     Route::post('/update/{id}', [UserController::class,'updateUsers'])->name('updateUser');
// });
// Route::group([
// 'prefix'=>'product',
// 'as'=>'product.',
// ], function () {
//     Route::get('/list-products',[ProController::class,'listProducts'])->name('listProducts');
//     Route::get('/add-products',[ProController::class,'createProducts'])->name('addProducts');
//     Route::post('/add', [ProController::class,'addProducts'])->name('postProducts');
// Route::get('/delete/{id}',[ProController::class,'deleteProducts'])->name('removePro');
// Route::get('/detail/{id}', [ProController::class,'detailProducts'])->name('detailProducts');
// Route::post('/update/{id}', [ProController::class,'updateProduct'])->name('updateProduct');

// });
// Route::get('/test',[UserController::class,'test']);

Route::group(['prefix'=>'admin','as'=>'admin.'],
function(){
    Route::group(['prefix'=>'products','as'=>'products.'],
    function(){
Route::get('/list-product',[ProductsController::class,'listProduct'])->name('listProduct');
Route::get('/add-product',[ProductsController::class,'formProduct'])->name('formAdd');
Route::post('/add-product',[ProductsController::class,'addProduct'])->name('addPro');
Route::delete('/delete-product/{idProduct}',[ProductsController::class,'deleteProduct'])->name('deleteProduct');
Route::get('/update-product/{idProduct}',[ProductsController::class,'updateProduct'])->name('updateProduct');
Route::put('/update-post-product/{idProduct}',[ProductsController::class,'updatePostProduct'])->name('updatePostProduct');
});
});