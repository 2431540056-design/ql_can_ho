<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaiCanHoController;
use App\Http\Controllers\CanHoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('loai-can-ho', LoaiCanHoController::class);

Route::resource('can-ho', CanHoController::class);