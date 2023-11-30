<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\JobTrackingController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\UserController;
use App\Models\Recruitment;
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
Route::resource('user', UserController::class);
Route::get('/user.edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::get('/admin.user.index', [UserController::class, 'indexadmin']);
//Đăng nhập bằng google
Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
//Đăng xuất
Route::get('/logout', [GoogleController::class, 'logout'])->name('logout');

//CV
Route::resource('cv', CVController::class);
Route::get('/watchCV/{id}', [CVController::class, 'watchCV'])->name('watchCV');
//Danh sách CV admin
Route::get('/listCV', [CVController::class, 'listCV'])->name('listCV');
Route::get('/deleteCV/{id}', [CVController::class, 'deleteCV'])->name('deleteCV');
Route::get('/createCV', [CVController::class, 'createCV'])->name('createCV');
Route::post('/storeCV', [CVController::class, 'storeCV'])->name('storeCV');
//Jobs
Route::resource('job', JobController::class);

//Danh sách ứng tuyển
Route::resource('recruitment', RecruitmentController::class);

//Danh sách công việc đang theo dõi
Route::resource('jobTracking', JobTrackingController::class);

//Đăng tuyển công việc
Route::get('/indexJob', [JobController::class, 'indexJob'])->name('indexJob');
Route::get('/createJob', [JobController::class, 'createJob'])->name('createJob');
Route::post('/storeJob', [JobController::class, 'storeJob'])->name('storeJob');
Route::get('/editJob/{id}', [JobController::class, 'editJob'])->name('editJob');
Route::put('/updateJob/{id}', [JobController::class, 'updateJob'])->name('updateJob');
Route::get('/deleteJob/{id}', [JobController::class, 'deleteJob'])->name('deleteJob');

//Chi tiết, ứng tuyển
Route::get('/chiTietCongViec/{id}', [JobController::class, 'chiTietCongViec'])->name('chiTietCongViec');
Route::post('/createUngTuyen', [RecruitmentController::class, 'createUngTuyen'])->name('createUngTuyen');
//Báo cáo
Route::get('/baoCaoCongViec', [JobController::class, 'baoCaoCongViec'])->name('baoCaoCongViec');
Route::get('/listBaoCao', [JobController::class, 'listBaoCao'])->name('listBaoCao');
Route::post('/capNhatBaoCao/{id}', [JobController::class, 'capNhatBaoCao'])->name('capNhatBaoCao');

//chuyen trang
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});
