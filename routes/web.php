<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;

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

//Trang chủ
Route::get('/index', [GoogleController::class, 'index'])->name('index');

//Blog
Route::resource('blog', BlogController::class);

Route::get('/login', function () {
    return view('login');
});

//Đăng nhập bằng google
Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
//Đăng xuất
Route::get('/logout', [GoogleController::class, 'logout'])->name('logout');

//chuyen trang
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});