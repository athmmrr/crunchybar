<?php

use App\Http\Controllers\GambarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('login');
});

// Route::get('/about', function () {
//     return redirect()->route('home');
// });

// routes/web.php
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/shop-single', [HomeController::class, 'shop-single']);
// Route::get('/shop-single1', [HomeController::class, 'single']);
Route::get('/shop-single/{id}', [PostController::class, 'show'])->name('shop-single');

//Route::redirect('/here', '/there');
Route::post('/gambar/simpanGambar', [GambarController::class, 'simpanGambar']);
Route::get('/shop',[PostController::class, 'shop'])->name('shop');

//auth
Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});

Route::get('admin', [AdminController::class, 'index'])->name('admin-index');
Route::get('/formTambah', [AdminController::class, 'formTambah'])->name('formTambah');
Route::post('/Admin/simpan-data', [AdminController::class, 'simpanData'])->name('simpan');
Route::get('/Admin/form-edit/{id}', [AdminController::class, 'formEdit'])->name('formEdit');
Route::post('/Admin/update-data', [AdminController::class, 'updateTamu'])->name('update');
Route::post('/Admin/hapus-data', [AdminController::class, 'hapusTamu'])->name('hapus');

// Route::get('/admin', [PostController::class, 'shop']);
