<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HandlerRole
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra người dùng đã đăng nhập và có role là 'admin'
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect('home')->with('error', 'Bạn không có quyền truy cập khu vực này.');
            // return 404
        }

        return $next($request);
    }
}
