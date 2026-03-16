<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\CuDan;

class AuthController extends Controller
{

    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
    $credentials = $request->only('email','password');

    if(Auth::attempt($credentials)){

        $user = Auth::user();

        // nếu là admin
        if($user->ma_vai_tro == 1){
            return redirect('/admin');
        }

        // nếu là cư dân
        return redirect('/');

    }

        return back()->with('error','Sai email hoặc mật khẩu');
    }

    public function formRegister()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {

        $request->validate([
        'email' => 'required|email|unique:nguoi_dung,email',
        'ho_ten' => 'required',
        'so_dien_thoai' => 'required',
        'password' => 'required|min:6'
    ]);

        $user = User::create([
        'ho_ten' => $request->ho_ten,
        'email' => $request->email,
        'mat_khau' => Hash::make($request->password),
        'ma_vai_tro' => 2
    ]);

    return redirect('/login')->with('success','Đăng ký thành công');

    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}