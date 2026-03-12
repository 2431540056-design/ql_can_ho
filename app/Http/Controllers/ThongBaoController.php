<?php

namespace App\Http\Controllers;

use App\Models\ThongBao;
use App\Models\CuDan;
use Illuminate\Http\Request;

class ThongBaoController extends Controller
{

    public function index()
    {
        $thongBaos = ThongBao::with('cuDan')->get();

        return view('admin.thong_bao.index',compact('thongBaos'));
    }

    public function create()
    {
        $cuDans = CuDan::all();

        return view('admin.thong_bao.create',compact('cuDans'));
    }

    public function store(Request $request)
    {
        ThongBao::create([
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'ma_cu_dan' => $request->ma_cu_dan,
            'ngay_gui' => now()
        ]);

        return redirect('/thong-bao');
    }

    public function destroy($id)
    {
        ThongBao::destroy($id);

        return redirect('/thong-bao');
    }

}