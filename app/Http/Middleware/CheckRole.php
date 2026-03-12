<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if ($role == 'admin' && $user->ma_vai_tro != 1) {
            abort(403, 'Không có quyền truy cập');
        }

        return $next($request);
    }
}