<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDon;
use App\Models\CanHo;
use App\Models\ThanhToan;
use Carbon\Carbon;

class HoaDonController extends Controller
{

    public function index()
    {
        $hoaDons = HoaDon::with('canHo')->get();

        return view('admin.hoa_don.index', compact('hoaDons'));
    }


    public function create()
    {
        $hoaDons = HoaDon::all();
        $canHos = CanHo::all();

        return view('admin.hoa_don.create', compact('hoaDons', 'canHos'));
    }


    public function store(Request $request)
    {
        HoaDon::create([
            'ma_can_ho' => $request->ma_can_ho,
            'tong_tien' => $request->tong_tien,
            'han_thanh_toan' => $request->han_thanh_toan,
            'trang_thai' => 'chua_thanh_toan'
        ]);

        return redirect('/admin/hoa-don')
                ->with('success', 'Thêm hóa đơn thành công');
    }


    public function show($id)
    {
        $hoaDon = HoaDon::findOrFail($id);

        return view('hoa_don.show', compact('hoaDon'));
    }


    public function edit($id)
    {
        $hoaDon = HoaDon::findOrFail($id);
        $canHos = CanHo::all();

        return view('admin.hoa_don.edit', compact('hoaDon','canHos'));
    }


    public function update(Request $request, $id)
    {
        $hoaDon = HoaDon::findOrFail($id);

        $hoaDon->update([
            'ma_can_ho' => $request->ma_can_ho,
            'thang' => $request->thang,
            'nam' => $request->nam,
            'tong_tien' => $request->tong_tien,
            'trang_thai' => $request->trang_thai
        ]);

        return redirect('/admin/hoa-don')->with('success', 'Cập nhật thành công');
    }


    public function destroy($id)
    {
        HoaDon::destroy($id);

        return redirect('/admin/hoa-don')->with('success', 'Xóa thành công');
    }

    public function thanhToan(Request $request, $id)
    {
        $hoaDon = HoaDon::findOrFail($id);

        // 1. Lưu vào bảng thanh_toan
        ThanhToan::create([
            'ma_hoa_don' => $hoaDon->ma_hoa_don,
            'so_tien' => $hoaDon->tong_tien,
            'phuong_thuc' => $request->phuong_thuc,
            'ngay_thanh_toan' => Carbon::now()
        ]);

        // 2. Update trạng thái hóa đơn
        $hoaDon->trang_thai = 'da_thanh_toan';
        $hoaDon->save();

        return back()->with('success', 'Thanh toán thành công');
    }

}