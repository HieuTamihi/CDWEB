<?php

use App\Follower;
use App\Http\Controllers\adminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\JobTrackingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/detailblog/{id}', [BlogController::class, 'blogdetail'])->name('detail_blog');
Route::get('/admin.blog.results', [BlogController::class, 'searchAdmin'])->name('searchAdminBlog');
Route::get('/users.blog.results', [BlogController::class, 'search'])->name('searchBlog');


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
Route::get('/showJob/{id}', [JobController::class, 'showJob'])->name('showjob');// show job
Route::get('/admin.job.results', [JobController::class, 'searchAdmin'])->name('searchJobAdmin');
Route::get('/users.search_job.results', [JobController::class, 'search'])->name('searchJob');

//employer
Route::get('/admin.employer.index', [EmployerController::class, 'indexadmin']);
Route::post('/admin.employer.index', [EmployerController::class, 'store'])->name('admin.employer.index');
Route::get('/admin.employer.create', [EmployerController::class, 'create']);
Route::get('/admin.employer.edit/{id}', [EmployerController::class, 'edit']);
Route::put('/admin.employer.update/{job}', [EmployerController::class, 'update'])->name('admin.employer.update');
Route::get('/admin.employer.delete/{blog}', [EmployerController::class, 'destroy']);
Route::get('/admin.employer.results', [EmployerController::class, 'search'])->name('searchEmployerAdmin');
Route::delete('/admin.employer.index/{id}', [EmployerController::class, 'destroy']);

//user
Route::resource('user', UserController::class);
Route::get('/user.edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::get('/admin.users.index', [UserController::class, 'indexadmin'])->name('admin.users.index');
Route::get('/admin.users.create', [UserController::class, 'create'])->name('users.create');
Route::get('/admin.users.delete/{user}', [UserController::class, 'destroy']);
Route::put('/admin.users.sua/{user}', [UserController::class, 'sua'])->name('admin.users.sua');
Route::get('/admin.users.edit/{id}', [UserController::class, 'edit1'])->name('admin.users.edit');
Route::get('/user.edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/admin.users.store', [UserController::class, 'store'])->name('users.store');
Route::get('/admin.users.results', [UserController::class, 'search'])->name('searchUserAdmin');

Route::get('/admin.user.index', [UserController::class, 'indexadmin']);
//Đăng nhập bằng google
Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
//Đăng xuất
Route::get('/logout', [GoogleController::class, 'logout'])->name('logout');
//login admin
Route::get('/admin', [adminController::class, 'index']);
Route::get('/admin/login', [adminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [adminController::class, 'login']);

//login
// route::get('/login');
Route::get('/admin/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login']);




//CV
Route::resource('cv', CVController::class);
Route::get('/watchCV/{id}', [CVController::class, 'watchCV'])->name('watchCV');
//Danh sách CV admin
Route::get('/listCV', [CVController::class, 'listCV'])->name('listCV');
Route::get('/deleteCV/{id}', [CVController::class, 'deleteCV'])->name('deleteCV');
Route::get('/createCV', [CVController::class, 'createCV'])->name('createCV');
Route::post('/storeCV', [CVController::class, 'storeCV'])->name('storeCV');

Route::get('/editCV/{id}', [CVController::class, 'editCV'])->name('editCV');
Route::put('/updateCV/{id}', [CVController::class, 'updateCV'])->name('updateCV');
Route::get('/admin.cv.results', [CVController::class, 'search'])->name('searchCVAdmin');

// Route::put('/users.cv.update/{item_cv}', [CVController::class, 'update']);
Route::get('/users.cv.delete/{cv}', [CVController::class, 'destroy']);

//Jobs
Route::resource('job', JobController::class);

//Danh sách ứng tuyển
Route::resource('recruitment', RecruitmentController::class);
Route::get('/admin.recruitment.results', [RecruitmentController::class, 'searchAdmin'])->name('searchRecruitmentAdmin');

//Danh sách công việc đang theo dõi
Route::resource('jobTracking', JobTrackingController::class);

Route::get('/admin.jobTracking', [JobTrackingController::class, 'listJobTracking'])->name('listJobTracking');
Route::get('/admin.job_tracking.results', [JobTrackingController::class, 'search'])->name('searchJob_trackingAdmin');

Route::resource('follower', FollowerController::class);

Route::get('cv/export_pdf', [CVController::class, 'exportPDF'])->name('exportPDF');
Route::get('/testmail', [JobController::class, 'sendemail']);

//Đăng tuyển công việc
Route::get('/indexJob', [JobController::class, 'indexJob'])->name('indexJob');
Route::get('/createJob', [JobController::class, 'createJob'])->name('createJob');
Route::post('/storeJob', [JobController::class, 'storeJob'])->name('storeJob');
Route::get('/editJob/{id}', [JobController::class, 'editJob'])->name('editJob');
Route::put('/updateJob/{id}', [JobController::class, 'updateJob'])->name('updateJob');
Route::get('/deleteJob/{id}', [JobController::class, 'deleteJob'])->name('deleteJob');

Route::get('/watchJob/{id}', [JobController::class, 'watchJob'])->name('watchJob');

//Chi tiết, ứng tuyển
Route::get('/chiTietCongViec/{id}', [JobController::class, 'chiTietCongViec'])->name('chiTietCongViec');
Route::post('/createUngTuyen', [RecruitmentController::class, 'createUngTuyen'])->name('createUngTuyen');
Route::post('/recruitment/xetduyet/{id}', [RecruitmentController::class, 'xetDuyet'])->name('recruitment.xetduyet');
//Báo cáo
Route::get('/baoCaoCongViec', [JobController::class, 'baoCaoCongViec'])->name('baoCaoCongViec');
Route::get('/listBaoCao', [JobController::class, 'listBaoCao'])->name('listBaoCao');
Route::post('/capNhatBaoCao/{id}', [JobController::class, 'capNhatBaoCao'])->name('capNhatBaoCao');

//chuyen trang
Route::get('/{name?}', function ($name = "index") {
    return view($name);
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
