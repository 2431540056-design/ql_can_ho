<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CanHoController;
use App\Http\Controllers\LoaiCanHoController;



/*
|--------------------------------------------------------------------------
| Trang chủ
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class,'formLogin']);

Route::post('/login', [AuthController::class,'login']);

Route::get('/logout', [AuthController::class,'logout']);



/*
|--------------------------------------------------------------------------
| Trang cư dân
|--------------------------------------------------------------------------
*/

Route::get('/home', function () {
    return view('home');
});



/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','role:admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::resource('can-ho', CanHoController::class);

    Route::resource('loai-can-ho', LoaiCanHoController::class);

});