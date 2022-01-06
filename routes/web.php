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
//     return view('product_information_list');
// });

//商品一覧画面を表示
// Route::get('/', function () {
//   return view('list.blade.php');
// });

Route::GET('/',
'App\Http\Controllers\Management_systemController@showList')->name
('users');