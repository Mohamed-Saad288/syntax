<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

//Route::get();  get data
//Route::post(); // sent data
//Route::put(); // update data
//Route::patch(); // update data
//Route::delete(); // delete data

//Route::get('/',function (){
//   return view('welcome');
//});

Route::get('/',[ProductController::class,'index'])
    ->name('product.index');

// task
// 2 routes /products   | /categories
// 2controllers   ProductController  |  CategoryController
// 2view          product.blade.php   | category.blade.php
