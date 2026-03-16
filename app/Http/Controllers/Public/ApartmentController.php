<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\CanHo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CuDan;
use App\Models\HoaDon;
use App\Models\ThongBao;

class ApartmentController extends Controller
{
    public function index(Request $request)
{
    $query = CanHo::query();

    if($request->min_price){
        $query->where('gia','>=',$request->min_price);
    }

    if($request->max_price){
        $query->where('gia','<=',$request->max_price);
    }

    $canhos = $query->with('loaiCanHo')->paginate(6);

    return view('public.can_ho.index', compact('canhos'));
}

    public function show($id)
    {
        $canho = CanHo::findOrFail($id);

        return view('public.can_ho.show', compact('canho'));
    }

    public function myApartment()
    {
        $user = Auth::user();

        $cudan = CuDan::where('ma_nguoi_dung', $user->ma_nguoi_dung)
        ->with('canHo')
        ->first();

        $hoadons = [];
        if($cudan){

            $hoadons = HoaDon::where('ma_can_ho',$cudan->ma_can_ho)
                ->orderBy('ma_hoa_don','desc')
                ->limit(3)
                ->get();

        $thongbaos = ThongBao::orderBy('ma_thong_bao','desc')
            ->limit(3)
            ->get();

        return view('public.my_apartment',compact(
        'cudan',
        'hoadons',
        'thongbaos'
        ));
    }
}
}

