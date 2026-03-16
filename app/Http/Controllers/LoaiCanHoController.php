<?php

namespace App\Http\Controllers;

use App\Models\LoaiCanHo;
use Illuminate\Http\Request;

class LoaiCanHoController extends Controller
{

    public function index()
    {
        $loaiCanHos = LoaiCanHo::all();

        return view('admin.loai_can_ho.index', compact('loaiCanHos'));
    }

    public function create()
    {
        return view('admin.loai_can_ho.create');
    }

    public function store(Request $request)
    {
        LoaiCanHo::create($request->all());

        return redirect('/admin/loai-can-ho');
    }

    public function edit($id)
    {
        $loaiCanHo = LoaiCanHo::findOrFail($id);

        return view('admin.loai_can_ho.edit',compact('loaiCanHo'));
    }

    public function update(Request $request,$id)
    {
        $loaiCanHo = LoaiCanHo::findOrFail($id);

        $loaiCanHo->update($request->all());

        return redirect('/admin/loai-can-ho');
    }

    public function destroy($id)
    {
        LoaiCanHo::destroy($id);

        return redirect('/admin/loai-can-ho');
    }

}