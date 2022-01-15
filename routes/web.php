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

//Route::get("/user_login", [UserController::class, "showList"]);

Route::get("user_login", "UserController@showList")->name
('users');

Route::post("product_information_list", "CompanieController@showList2")->name
('companies');

//Route::get("/user_login", [UserController::class,"showList"]);
// Route::get('/', function () {
//     echo 'user_login';
// });

// Route::get('/', function () {
//     return view('product_information_list');
// });
    
//Route::get('samplepost', 'Management_systemController@showList');
