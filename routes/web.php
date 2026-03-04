<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaiCanHoController;
use App\Http\Controllers\CanHoController;

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::resource('loai-can-ho', LoaiCanHoController::class);

Route::resource('can-ho', CanHoController::class);

use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [DashboardController::class,'index']);