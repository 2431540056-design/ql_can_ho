<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\YeuCauThue;
use App\Models\CuDan;
use App\Models\HopDong;

class DuyetThueController extends Controller
{

    public function index()
    {
        $yeuCaus = YeuCauThue::with('nguoiDung','canHo')->get();

        return view('admin.yeu_cau_thue.index',compact('yeuCaus'));
    }

    public function duyet($id)
    {
        $yc = YeuCauThue::findOrFail($id);

        $yc->trang_thai = "da_duyet";
        $yc->save();

        CuDan::create([
            'ma_nguoi_dung'=>$yc->ma_nguoi_dung,
            'ma_can_ho'=>$yc->ma_can_ho
        ]);

        return back()->with('success','Đã duyệt yêu cầu thuê');
    }

    public function tuChoi($id)
    {
        $yc = YeuCauThue::findOrFail($id);

        $yc->trang_thai = "tu_choi";
        $yc->save();

        return back()->with('success','Đã từ chối yêu cầu');
    }

}
