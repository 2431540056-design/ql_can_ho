<?php

namespace App\Http\Controllers;

use App\Models\PhanAnh;
use Illuminate\Http\Request;

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
}