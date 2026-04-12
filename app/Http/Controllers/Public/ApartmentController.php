<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\CanHo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CuDan;
use App\Models\HoaDon;
use App\Models\HopDong;
use App\Models\ThongBao;

class ApartmentController extends Controller
{   
    public function index()
    {
        $canHos = CanHo::paginate(6); 

        return view('public.can_ho.index', compact('canHos'));
    }

    public function show($id)
    {
        $canho = CanHo::findOrFail($id);

        return view('public.can_ho.show', compact('canho'));
    }

    public function myApartment()
    {
        $cuDan = CuDan::with('canHo')
            ->where('ma_nguoi_dung', Auth::id())
            ->first();

        $hoaDon = null;
        $hopDong = null;

        if ($cuDan && $cuDan->canHo) {
            $hoaDon = HoaDon::where('ma_can_ho', $cuDan->canHo->ma_can_ho)
                ->latest()
                ->first();

            $hopDong = HopDong::where('ma_cu_dan', $cuDan->ma_cu_dan)
                ->latest()
                ->first();
        }

        $thongbaos = ThongBao::orderBy('ngay_gui', 'desc')->get();

        return view('public.my_apartment', compact('cuDan', 'hoaDon', 'hopDong', 'thongbaos'));
    }
}