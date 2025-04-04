<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class HandlerRole
{
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu chưa đăng nhập hoặc không phải admin
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect('/404')->with('error', 'Bạn không có quyền truy cập.');
        }

        return $next($request);
    }
}
