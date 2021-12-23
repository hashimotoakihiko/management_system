<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//商品一覧画面を表示
Route::get('/','App\Http\Controllers\Management_systemController@showList')->name
('users');


// //商品登録画面を表示
// Route::get('/management_system/create','App\Http\Controllers\Management_systemController@showCreate')->name
// ('create');

// //商品登録
// Route::post('/management_system/store','App\Http\Controllers\Management_systemController@exeStore')->name
// ('store');

// //商品詳細画面を表示
// Route::get('/management_system/{id}','App\Http\Controllers\Management_systemController@showDetail')->name
// ('show');

// //商品編集画面を表示
// Route::get('/management_system/edit/{id}','App\Http\Controllers\Management_systemController@showEdit')->name
// ('edit');
// Route::post('/management_system/update','App\Http\Controllers\Management_systemController@exeUpdate')->name
// ('update');






/*
//ブログ一覧画面を表示
Route::get('/','App\Http\Controllers\BlogController@showList')->name
('blogs');

//ブログ登録画面を表示
Route::get('/blog/create','App\Http\Controllers\BlogController@showCreate')->name
('create');

//ブログ登録
Route::post('/blog/store','App\Http\Controllers\BlogController@exeStore')->name
('store');

//ブログ詳細画面を表示
Route::get('/blog/{id}','App\Http\Controllers\BlogController@showDetail')->name
('show');

//ブログ編集画面を表示
Route::get('/blog/edit/{id}','App\Http\Controllers\BlogController@showEdit')->name
('edit');
Route::post('/blog/update','App\Http\Controllers\BlogController@exeUpdate')->name
('update');
*/