<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\SaleController;

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

//商品一覧画面表示
Route::get('/product_list', [ProductController::class,'productshowList'])->name
('productshowList');

Route::post('/product_list', [ProductController::class,'productshowList'])->name
('productshowList');

//新規ユーザー登録画面表示
Route::get('/registration', [UserController::class,'new'])->name
('new');

Route::post('/registration', [UserController::class,'new'])->name
('new');

//商品新規登録表示
Route::get('/product_new', [ProductController::class,'product_new'])->name
('product_new');

Route::post('/product_new', [ProductController::class,'product_new'])->name
('product_new');


//商品詳細表示
Route::get('/product_details', [ProductController::class,'product_details'])->name
('product_details');

Route::post('/product_details', [ProductController::class,'product_details'])->name
('product_details');


//商品編集表示
Route::get('/product_edit', [ProductController::class,'product_edit'])->name
('product_edit');

Route::post('/product_edit', [ProductController::class,'product_edit'])->name
('product_edit');

//商品検索
Route::get('/', [ProductController::class, 'index'])->name
('products.index');
Route::get('/index', [ProductController::class,'index'])->name
('index');
Route::get('/', [ProductController::class,'index'])->name
('crud.index'); 
/* 一覧表示 */

// //本の一覧を表示するページ
// Route::get('/index', [ProductController::class,'product.index'])->name
// ('product.index');
// //本の情報を作成するページの表示
// Route::get('/create', [ProductController::class,'product.create'])->name
// ('product.create');
// //本の情報を保存
// Route::post('/store', [ProductController::class,'product.store'])->name
// ('product.store');
// //本の中身を表示するページ
// Route::post('/show/{product}', [ProductController::class,'product.show'])->name
// ('product.show');







