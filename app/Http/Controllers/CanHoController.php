<?php

namespace App\Http\Controllers;

use App\Models\CanHo;
use App\Models\LoaiCanHo;
use Illuminate\Http\Request;

class CanHoController extends Controller
{

    public function index()
    {
        $canHos = CanHo::with('loaiCanHo')->get();

        return view('admin.can_ho.index',compact('canHos'));
    }

    public function create()
    {
        $loaiCanHos = LoaiCanHo::all();

        return view('admin.can_ho.create',compact('loaiCanHos'));
    }

    public function store(Request $request)
    {

        CanHo::create($request->all());

        return redirect('/admin/can-ho')
        ->with('success','Thêm căn hộ thành công');

    }

    public function edit($id)
    {
    $canHo = CanHo::findOrFail($id);

    $loaiCanHos = LoaiCanHo::all();

    return view('admin.can_ho.edit',
    compact('canHo','loaiCanHos'));
    }

    public function update(Request $request,$id)
    {

        $canHo = CanHo::findOrFail($id);

        $canHo->update($request->all());

        return redirect('/admin/can-ho')
        ->with('success','Cập nhật căn hộ thành công');

    }

    public function destroy($id)
    {

        CanHo::destroy($id);

        return redirect('/admin/can-ho')
        ->with('success','Xóa căn hộ thành công');

    }

}