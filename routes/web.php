
<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\SaleController;


// ユーザー登録処理
Route::post('/registration', [UserController::class, 'store'])->name('users.store');

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
// Route::get('/',
// 'UserController@showLogin')->name
// ('users');
Route::get('/login', [UserController::class,'showLogin'])->name('showLogin');
Route::post('/login', [UserController::class, 'login'])->name('login');

//商品一覧画面表示
Route::get('/product_list', [ProductController::class,'productshowList'])->name('productshowList');
Route::post('/upload', [ProductController::class, 'upload'])->name('product.upload');

//新規ユーザー登録画面表示
Route::get('/registration', [UserController::class,'new'])->name('new');

//商品新規登録表示
Route::get('/create', [ProductController::class, 'create'])->name
('products.create');

// 商品の登録処理
Route::post('/store', [ProductController::class, 'store'])->name
('products.store');


//商品詳細表示
Route::get('/show/{id}', [ProductController::class, 'show'])->name
('products.show');

//商品検索
Route::get('/', [ProductController::class,'index'])->name
('crud.index');

Route::get('/search', [CompanyController::class,'search'])->name
('crud.search');

//商品編集
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name
('products.edit');

// 商品の更新処理
Route::post('/update/{id}', [ProductController::class, 'update'])->name
('products.update');

//商品削除
Route::post('/destroy{id}', [ProductController::class, 'destroy'])->name
('products.destroy');
