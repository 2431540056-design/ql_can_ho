<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HopDong;
use App\Models\CuDan;
use App\Models\CanHo;

class HopDongController extends Controller
{

    public function index()
    {
        $hopDongs = HopDong::with(['cuDan.nguoiDung','canHo'])->get();

        return view('admin.hop_dong.index', compact('hopDongs'));
    }

    public function create()
    {
        $cuDans = CuDan::with('nguoiDung')->get();
        $canHos = CanHo::all();

        return view('admin.hop_dong.create', compact('cuDans','canHos'));
    }

    public function store(Request $request)
    {
        HopDong::create($request->all());

        return redirect('/hop-dong')->with('success','Thêm hợp đồng thành công');
    }

    public function edit($id)
    {
        $hopDong = HopDong::findOrFail($id);
        $cuDans = CuDan::with('nguoiDung')->get();
        $canHos = CanHo::all();

        return view('admin.hop_dong.edit', compact('hopDong','cuDans','canHos'));
    }

    public function update(Request $request, $id)
    {
        $hopDong = HopDong::findOrFail($id);
        $hopDong->update($request->all());

        return redirect('/hop-dong')->with('success','Cập nhật thành công');
    }

    public function destroy($id)
    {
        HopDong::destroy($id);

        return redirect('/hop-dong')->with('success','Xóa thành công');
    }
}