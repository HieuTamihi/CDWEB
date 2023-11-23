<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RecruitmentController;
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

//Trang chủ
Route::get('/', [GoogleController::class, 'index'])->name('index');
Route::get('/index', [GoogleController::class, 'index'])->name('index');
//Chi tiết
Route::get('/chiTiet/{id}', [GoogleController::class, 'getDetailJob'])->name('getDetailJob');

//Blog
Route::resource('blog', BlogController::class);
Route::get('/admin.blog.index', [BlogController::class, 'indexadmin'])->name('blog.indexadmin');
Route::post('/admin.blog.index', [BlogController::class, 'store'])->name('admin.blog.index');
Route::get('/admin.blog.create', [BlogController::class, 'create']);
Route::get('/admin.blog.edit/{id}', [BlogController::class, 'edit']);
Route::put('/admin.blog.update/{job}', [BlogController::class, 'update'])->name('admin.blog.update');
Route::get('/admin.blog.delete/{blog}', [BlogController::class, 'destroy']);
Route::get('/login', function () {
    return view('login');
});


//job
// Route::resource('job', JobController::class, 'indexadmin' );
Route::resource('admin.job', 'JobController::class');
Route::get('/admin.job.index', [JobController::class, 'indexadmin']);
Route::get('/admin.job.create', [JobController::class, 'create']);
Route::get('/admin.job.edit/{id}', [JobController::class, 'edit']);
Route::put('/admin.job.update/{job}', [JobController::class, 'update'])->name('admin.job.update');
Route::post('/admin.job.index', [JobController::class, 'store'])->name('admin.job.index');
//Route::post('/admin.job', [JobController::class, 'store'])->name('admin.job.store');
Route::get('/admin.job.delete/{job}', [JobController::class, 'destroy']);

//employer
Route::get('/admin.employer.index', [EmployerController::class, 'indexadmin']);
Route::delete('/admin.employer.index/{id}', [EmployerController::class, 'destroy']);

//user
Route::get('/admin.user.index', [UserController::class, 'indexadmin']);
//Đăng nhập bằng google
Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
//Đăng xuất
Route::get('/logout', [GoogleController::class, 'logout'])->name('logout');

//CV
Route::resource('cv', CVController::class);

//Jobs
Route::resource('job', JobController::class);

//Danh sách ứng tuyển
Route::resource('recruitment', RecruitmentController::class);

//chuyen trang
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});
