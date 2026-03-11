<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CuDanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cuDans = User::where('ma_vai_tro',2)->get();

        return view('admin.cu_dan.index',compact('cuDans'));

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
