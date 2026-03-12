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
        ThanhToan::create($request->all());

        return redirect('/thanh-toan');
    }

    public function edit($id)
    {
        $thanhToan = ThanhToan::findOrFail($id);
        $hoaDons = HoaDon::all();

        return view('admin.thanh_toan.edit', compact('thanhToan','hoaDons'));
    }

    public function update(Request $request,$id)
    {
        $thanhToan = ThanhToan::findOrFail($id);

        $thanhToan->update($request->all());

        return redirect('/thanh-toan');
    }

    public function destroy($id)
    {
        ThanhToan::destroy($id);

        return redirect('/thanh-toan');
    }

}