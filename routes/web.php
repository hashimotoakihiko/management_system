<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanieController;
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

//ログイン画面表示
Route::get('/', 
'UserController@showLogin')->name
('users');

Route::get('/login', [UserController::class,'showLogin'])->name
('showLogin');

Route::get('/product_list', [CompanieController::class,'showList'])->name
('showlist');

Route::post('/product_list', [CompanieController::class,'showList'])->name
('showList');

Route::get('/registration', [UserController::class,'new'])->name
('new');

Route::post('/registration', [UserController::class,'new'])->name
('new');

Route::get('/product_new', [ProductController::class,'product_new'])->name
('product_new');

Route::post('/product_new', [ProductController::class,'product_new'])->name
('product_new');

Route::get('/product_details', [ProductController::class,'product_details'])->name
('product_details');

Route::post('/product_details', [ProductController::class,'product_details'])->name
('product_details');

Route::get('/product_edit', [ProductController::class,'product_edit'])->name
('product_edit');

Route::post('/product_edit', [ProductController::class,'product_edit'])->name
('product_edit');