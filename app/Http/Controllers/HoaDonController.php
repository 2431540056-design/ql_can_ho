<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDon;
use App\Models\CanHo;
use App\Models\ThanhToan;

class HoaDonController extends Controller
{

    public function index()
    {
        $hoaDons = HoaDon::with('canHo')->get();

        return view('admin.hoa_don.index', compact('hoaDons'));
    }


    public function create()
    {
        $canHos = CanHo::all();

        return view('admin.hoa_don.create', compact('canHos'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'ma_can_ho' => 'required',
            'thang' => 'required',
            'nam' => 'required',
            'tong_tien' => 'required'
        ]);

        HoaDon::create([
            'ma_can_ho' => $request->ma_can_ho,
            'thang' => $request->thang,
            'nam' => $request->nam,
            'tong_tien' => $request->tong_tien,
            'trang_thai' => 'Chưa thanh toán'
        ]);

        return redirect('/admin/hoa-don')->with('success', 'Tạo hóa đơn thành công');
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

    public function thanhToan($id)
    {
        $hoaDon = HoaDon::findOrFail($id);

        ThanhToan::create([
            'ma_hoa_don' => $id,
            'so_tien' => $hoaDon->tong_tien,
            'ngay_thanh_toan' => now()
        ]);

        $hoaDon->update([
            'trang_thai' => 'da_thanh_toan'
        ]);

        return back()->with('success','Thanh toán thành công');
    }

}