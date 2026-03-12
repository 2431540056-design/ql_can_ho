<?php

namespace App\Http\Controllers;

use App\Models\CuDan;
use App\Models\CanHo;
use Illuminate\Http\Request;

class CuDanController extends Controller
{

    public function index()
    {
        $cuDans = CuDan::with(['nguoiDung','canHo'])->get();

        return view('admin.cu_dan.index', compact('cuDans'));
    }

    public function create()
    {
        $canHos = CanHo::all();

        return view('admin.cu_dan.create',compact('canHos'));
    }

    public function store(Request $request)
    {
        CuDan::create($request->all());

        return redirect('/cu-dan');
    }

    public function edit($id)
    {
        $cuDan = CuDan::findOrFail($id);

        $canHos = CanHo::all();

        return view('admin.cu_dan.edit',compact('cuDan','canHos'));
    }

    public function update(Request $request,$id)
    {
        $cuDan = CuDan::findOrFail($id);

        $cuDan->update($request->all());

        return redirect('/cu-dan');
    }

    public function destroy($id)
    {
        CuDan::destroy($id);

        return redirect('/cu-dan');
    }

}