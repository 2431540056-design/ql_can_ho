<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ThongBao;
use App\Models\CuDan;
use Illuminate\Http\Request;

class ThongBaoController extends Controller
{
    public function index()
    {
        $thongBaos = ThongBao::with('cuDan')
        ->orderBy('ngay_gui','desc')
        ->get();

        return view('admin.thong_bao.index', compact('thongBaos'));
    }

    public function create()
    {
        $cuDans = CuDan::all();

        return view('admin.thong_bao.create', compact('cuDans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tieu_de' => 'required',
            'noi_dung' => 'required',
        ]);

        ThongBao::create([
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'ma_cu_dan' => $request->ma_cu_dan,
            'ngay_gui' => now()
        ]);

        return redirect('/admin/thong-bao')
        ->with('success','Tạo thông báo thành công');
    }

    public function edit($id)
    {
        $thongBao = ThongBao::findOrFail($id);
        $cuDans = CuDan::all();

        return view('admin.thong_bao.edit',
        compact('thongBao','cuDans'));
    }

    public function update(Request $request, $id)
    {
        $thongBao = ThongBao::findOrFail($id);

        $request->validate([
            'tieu_de' => 'required',
            'noi_dung' => 'required',
        ]);

        $thongBao->update([
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'ma_cu_dan' => $request->ma_cu_dan,
        ]);

        return redirect('/admin/thong-bao')
        ->with('success','Cập nhật thành công');
    }

    public function destroy($id)
    {
        ThongBao::destroy($id);

        return back()->with('success','Xóa thành công');
    }
}