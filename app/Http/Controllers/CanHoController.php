<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CanHo;
use App\Models\LoaiCanHo;

class CanHoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CanHo::with('loaiCanHo')->get();
        return view('admin.can_ho.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loaiCanHo = LoaiCanHo::all();
        return view('admin.can_ho.create', compact('loaiCanHo'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $canHo = CanHo::findOrFail($id);
        $loaiCanHo = LoaiCanHo::all();

        return view('admin.can_ho.edit', compact('canHo','loaiCanHo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $canHo = CanHo::findOrFail($id);

        $canHo->update($request->all());

        return redirect()->route('can-ho.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $canHo = CanHo::findOrFail($id);
        $canHo->delete();

        return redirect()->route('can-ho.index');
    }
}
