<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThanhToan;
use App\Models\HoaDon;

class ThanhToanController extends Controller
{

    public function index()
    {
        $thanhToans = ThanhToan::with('hoaDon')->get();

        return view('admin.thanh_toan.index', compact('thanhToans'));
    }


    public function create()
    {
        $hoaDons = HoaDon::all();

        return view('admin.thanh_toan.create', compact('hoaDons'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'ma_hoa_don' => 'required',
            'so_tien' => 'required',
            'ngay_thanh_toan' => 'required'
        ]);

        ThanhToan::create($request->all());

        $hoaDon = HoaDon::find($request->ma_hoa_don);
        $hoaDon->update([
            'trang_thai' => 'Đã thanh toán'
        ]);

        return redirect('/thanh-toan')->with('success', 'Thanh toán thành công');
    }


    public function show($id)
    {
        $thanhToan = ThanhToan::findOrFail($id);

        return view('thanh_toan.show', compact('thanhToan'));
    }


    public function edit($id)
    {
        $thanhToan = ThanhToan::findOrFail($id);
        $hoaDons = HoaDon::all();

        return view('admin.thanh_toan.edit', compact('thanhToan','hoaDons'));
    }


    public function update(Request $request, $id)
    {
        $thanhToan = ThanhToan::findOrFail($id);

        $thanhToan->update($request->all());

        return redirect('/thanh-toan')->with('success', 'Cập nhật thành công');
    }


    public function destroy($id)
    {
        ThanhToan::destroy($id);

        return redirect('/thanh-toan')->with('success', 'Xóa thành công');
    }

}