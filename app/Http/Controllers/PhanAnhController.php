<?php

namespace App\Http\Controllers;

use App\Models\PhanAnh;
use App\Models\CuDan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhanAnhController extends Controller
{
    public function index()
    {
        $phanAnhs = PhanAnh::with('cuDan.nguoiDung')->get();

        return view('admin.phan_anh.index',compact('phanAnhs'));
    }

    public function edit($id)
    {
        $phanAnh = PhanAnh::findOrFail($id);

        return view('admin.phan_anh.edit', compact('phanAnh'));
    }

    public function update(Request $request, $id)
    {
        $phanAnh = PhanAnh::findOrFail($id);

        $phanAnh->update($request->all());

        return redirect('/admin/phan-anh')
        ->with('success','Cập nhật thành công');
    }

    public function destroy($id)
    {
        PhanAnh::destroy($id);

        return back()->with('success','Xóa thành công');
    }

    public function xuLy($id)
    {
        $phanAnh = PhanAnh::findOrFail($id);

        $phanAnh->trang_thai = 'da_xu_ly';

        $phanAnh->save();

        return redirect('/phan-anh');
    }

    public function create()
    {
        return view('public.phan_anh.create');
    }

    public function store(Request $request)
    {
        $cuDan = CuDan::where('ma_nguoi_dung', Auth::id())->first();

        PhanAnh::create([
            'ma_cu_dan' => $cuDan->ma_cu_dan,
            'noi_dung' => $request->noi_dung,
            'trang_thai' => 'cho_xu_ly',
            'ngay_gui' => now()
        ]);

        return redirect('/my-apartment')
            ->with('success', 'Gửi phản ánh thành công');
    }
}