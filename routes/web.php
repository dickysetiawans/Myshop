<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
	$updateDone = ['0','1'];
	$product = DB::table('name_product')->get();
    return view('index',['updateDone'=>$updateDone['0']],['product' => $product]);
});

//users
Route::get('/product', [HomeController::class, 'product']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
//
Route::get('/tambah', [HomeController::class, 'tambah']);
Route::post('/tambah/store', [HomeController::class, 'store']);

//admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::post('/admin/update', [AdminController::class, 'update']);
Route::get('/admin/delete/{id}', [AdminController::class, 'delete']);

// register user
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::post('/dashboard/profile', [DashboardController::class, 'update'])->middleware('auth');
Route::get('/dashboard/keranjang', [DashboardController::class, 'keranjang'])->middleware('auth');

Route::get('/dashboard/voucher', [DashboardController::class, 'voucher'])->middleware('auth');




Route::post('/logout', [LoginController::class, 'logout']);
// Route::post('/login', [RegisterController::class, 'store']);
// Route::get(
// 	'/register', 'App\Http\Controllers\RegisterController@index');

