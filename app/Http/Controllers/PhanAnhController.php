<?php

namespace App\Http\Controllers;

use App\Models\PhanAnh;

class PhanAnhController extends Controller
{
    public function index()
    {
        $phanAnhs = PhanAnh::with('cuDan.nguoiDung')->get();

        return view('admin.phan_anh.index',compact('phanAnhs'));
    }

    public function destroy($id)
    {
        PhanAnh::destroy($id);

        return redirect('/phan-anh');
    }

    public function xuLy($id)
    {
        $phanAnh = PhanAnh::findOrFail($id);

        $phanAnh->trang_thai = 'da_xu_ly';

        $phanAnh->save();

        return redirect('/phan-anh');
    }
}