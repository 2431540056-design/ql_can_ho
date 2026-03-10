<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){

            $user = Auth::user();

            if($user->ma_vai_tro == 1){
                return redirect('/admin');
            }

            if($user->ma_vai_tro == 2){
                return redirect('/home');
            }
        }

    return back()->with('error','Sai email hoặc mật khẩu');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}