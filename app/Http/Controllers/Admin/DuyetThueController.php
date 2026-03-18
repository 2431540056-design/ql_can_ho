<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\YeuCauThue;
use App\Models\CuDan;
use App\Models\HopDong;
use App\Models\CanHo;

class DuyetThueController extends Controller
{

    public function index()
    {
        $yeuCaus = YeuCauThue::with('nguoiDung','canHo')->get();

        return view('admin.duyet_thue.index',compact('yeuCaus'));
    }

    public function duyet($id)
    {
        $yc = YeuCauThue::with('nguoiDung')->findOrFail($id);

        if($yc->trang_thai == 'da_duyet'){
        return back()->with('error','Yêu cầu đã được duyệt rồi');
        }

        $yc->update([
        'trang_thai' => 'da_duyet'
        ]);

        $cuDan = CuDan::create([
        'ma_nguoi_dung' => $yc->ma_nguoi_dung,
        'ma_can_ho' => $yc->ma_can_ho,
        'so_dien_thoai' => $yc->nguoiDung->so_dien_thoai,
        'cccd' => null
        ]);

        $canHo = CanHo::with('loaiCanHo')->find($yc->ma_can_ho);
        HopDong::create([
        'ma_can_ho' => $yc->ma_can_ho,
        'ma_cu_dan' => $cuDan->ma_cu_dan,
        'gia_thue' => $canHo->loaiCanHo->gia_co_ban,
        'loai_hop_dong' => 'thue',
        'ngay_bat_dau' => now(),
        'ngay_ket_thuc' => now()->addYear(),
        'trang_thai' => 'dang_hieu_luc'
        ]);

        $canHo->update([
        'trang_thai' => 'dang_o'
        ]);

        return back()->with('success','Đã duyệt yêu cầu thuê và tạo hợp đồng');
    }

    public function tuChoi($id)
    {
        $yc = YeuCauThue::findOrFail($id);

        $yc->trang_thai = "tu_choi";
        $yc->save();

        return back()->with('success','Đã từ chối yêu cầu');
    }

}
