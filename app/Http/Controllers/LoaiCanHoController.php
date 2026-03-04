<?php

namespace App\Http\Controllers;

use App\Models\LoaiCanHo;
use Illuminate\Http\Request;

class LoaiCanHoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = \App\Models\LoaiCanHo::all();
        return view('admin.loai_can_ho.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LoaiCanHo $loaiCanHo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ma_loai_can_ho)
    {
        $loai = LoaiCanHo::findOrFail($ma_loai_can_ho);
        return view('admin.loai_can_ho.edit', compact('loai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ma_loai_can_ho)
    {
        $loai = LoaiCanHo::findOrFail($ma_loai_can_ho);
        $loai->update($request->all());

        return redirect()->route('loai-can-ho.index')
            ->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ma_loai_can_ho)
    {
        $loai = LoaiCanHo::findOrFail($ma_loai_can_ho);
        $loai->delete();

        return redirect()->route('loai-can-ho.index')
            ->with('success', 'Xóa thành công!');
    }
}
