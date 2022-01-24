<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanieController;

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

Route::get('/', function (){
  return view('user_login');
});

// Route::get('user_login', function (){
//   return view('product_information_list');
// });

Route::get('/user_login', [UserController::class,'showLogin'])->name
('showLogin');

Route::get('/product_information_list', [CompanieController::class,'Login'])->name
('Login');

Route::get('/product_information_new_registration', [CompanieController::class,'new_registration'])->name
('Login');