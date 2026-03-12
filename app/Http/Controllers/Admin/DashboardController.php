<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\CanHo;
use App\Models\HoaDon;
use App\Models\CuDan;
use App\Models\PhanAnh;

class DashboardController extends Controller
{
    public function index()
    {

        $soCanHo = CanHo::count();

        $soCuDan = CuDan::count();

        $soHoaDon = HoaDon::count();

        $soPhanAnh = PhanAnh::count();

        return view('admin.dashboard', compact(
            'soCanHo',
            'soCuDan',
            'soHoaDon',
            'soPhanAnh'
        ));
    }
}