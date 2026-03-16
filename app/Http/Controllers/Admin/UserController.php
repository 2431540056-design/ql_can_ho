<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VaiTro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('vaiTro')->get();

        return view('admin.nguoi_dung.index', compact('users'));
    }

    public function create()
    {
        $vaiTros = VaiTro::all();

        return view('admin.nguoi_dung.create', compact('vaiTros'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['mat_khau'] = Hash::make($request->mat_khau);

        User::create($data);

        return redirect('/admin/nguoi-dung');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $vaiTros = VaiTro::all();

        return view('admin.nguoi_dung.edit', compact('user','vaiTros'));
    }

    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);

        $data = $request->all();

        if($request->mat_khau){
            $data['mat_khau'] = Hash::make($request->mat_khau);
        }

        $user->update($data);

        return redirect('/admin/nguoi-dung');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/admin/nguoi-dung');
    }

}