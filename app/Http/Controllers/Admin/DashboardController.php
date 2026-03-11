<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CanHo;
use App\Models\User;

class DashboardController extends Controller
{

    public function index()
    {

        $tongCanHo = CanHo::count();

        $tongCuDan = User::where('ma_vai_tro',2)->count();

        return view('admin.dashboard',compact(
            'tongCanHo',
            'tongCuDan'
        ));

    }

}