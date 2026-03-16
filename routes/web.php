<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DuyetThueController;

use App\Http\Controllers\CanHoController;
use App\Http\Controllers\LoaiCanHoController;
use App\Http\Controllers\CuDanController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\HopDongController;
use App\Http\Controllers\PhanAnhController;
use App\Http\Controllers\ThongBaoController;
use App\Http\Controllers\YeuCauThueController;


use App\Http\Controllers\Public\ApartmentController;



/*
|--------------------------------------------------------------------------
| PUBLIC SITE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/can-ho',[ApartmentController::class,'index']);

Route::get('/can-ho/{id}',[ApartmentController::class,'show']);

Route::post('/yeu-cau-thue',[YeuCauThueController::class,'store']);



/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/

Route::get('/login',[AuthController::class,'formLogin'])->name('login');

Route::post('/login',[AuthController::class,'login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/register',[AuthController::class,'formRegister']);

Route::post('/register',[AuthController::class,'register']);

Route::get('/register',[AuthController::class,'formRegister']);

Route::post('/register',[AuthController::class,'register']);



/*
|--------------------------------------------------------------------------
| CƯ DÂN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function(){

    Route::get('/welcome',function(){
        return view('home');
    });
    Route::get('/my-apartment',[ApartmentController::class,'myApartment']);

    Route::get('/dashboard', [ApartmentController::class,'dashboard']);
});




/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware(['auth','role:admin'])->group(function(){

    Route::get('/',[DashboardController::class,'index']);

    Route::resource('can-ho',CanHoController::class);

    Route::resource('loai-can-ho',LoaiCanHoController::class);

    Route::resource('cu-dan',CuDanController::class);

    Route::resource('hop-dong',HopDongController::class);

    Route::resource('hoa-don',HoaDonController::class);

    Route::resource('thanh-toan',ThanhToanController::class);

    Route::resource('nguoi-dung',UserController::class);

    Route::resource('phan-anh',PhanAnhController::class);

    Route::resource('thong-bao',ThongBaoController::class);

    Route::put('/phan-anh/{id}/xu-ly',[PhanAnhController::class,'xuLy']);

    Route::resource('yeu-cau-thue',YeuCauThueController::class);

    Route::get('/admin/yeu-cau-thue',[AdminDuyetThueController::class,'index']);

    Route::post('/admin/duyet-thue/{id}',[AdminDuyetThueController::class,'duyet']);

});