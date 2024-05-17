<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

// Route::get('/about', function () {
//     return redirect()->route('home');
// });

// routes/web.php
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/shop-single', [HomeController::class, 'single']);
Route::get('/contact', [HomeController::class, 'contact']);
// Route::get('/index', 'HomeController@index')->name('home');
// Route::get('/index', 'HomeController@index')->name('home');

//Route::redirect('/here', '/there');