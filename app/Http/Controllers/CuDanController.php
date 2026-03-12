<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CuDan;

class CuDanController extends Controller
{

    public function index()
    {
        $cuDans = CuDan::all();

        return view('admin.cu_dan.index', compact('cuDans'));
    }


    public function create()
    {
        return view('admin.cu_dan.create');
    }


    public function store(Request $request)
    {
        CuDan::create($request->all());

        return redirect('/cu-dan');
    }


    public function edit($id)
    {
        $cuDan = CuDan::findOrFail($id);

        return view('admin.cu_dan.edit', compact('cuDan'));
    }


    public function update(Request $request, $id)
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