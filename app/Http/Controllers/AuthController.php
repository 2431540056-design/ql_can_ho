<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $user = User::where('email', $request->email)->first();

    if($user && Hash::check($request->password, $user->mat_khau))
    {
        session(['user' => $user]);

        return redirect('/admin');
    }

    return back()->with('error','Sai email hoặc mật khẩu');
}

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}