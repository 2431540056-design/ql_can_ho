<?php

namespace App\Http\Controllers;

use App\Models\YeuCauThue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class YeuCauThueController extends Controller
{
    public function store(Request $request){

        YeuCauThue::create([

            'ma_nguoi_dung' => Auth::id(),
            'ma_can_ho' => $request->ma_can_ho,
            'ngay_hen' => $request->ngay_hen,
            'gio_hen' => $request->gio_hen,
            'ghi_chu' => $request->ghi_chu,
            'trang_thai' => 'cho_duyet'
        ]);

    return redirect('/can-ho')->with('success','Đã gửi yêu cầu thuê');
    }

    public function index()
    {
        $yeuCaus = YeuCauThue::with('canHo','nguoiDung')->get();
        return view('admin.yeu_cau_thue.index',compact('yeuCaus'));
    }
}