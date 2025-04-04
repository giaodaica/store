<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
class RegisteredUserController extends Controller
{
    /**
     * Show the registration page.
     */
    public function create()
    {
        return view('pages.auth/register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {
        // Tạo người dùng mới
        $user = User::create([
            'email' => $request->email,
            'username'=> $request->username,
            'password'=> bcrypt($request->password), // Mã hóa mật khẩu
            'fpt_poly'=> $request->fpt_poly
        ]);

        // Đăng nhập người dùng ngay lập tức
        Auth::login($user);

        // Gửi email chào mừng kèm đường link (không cần route)
        $data = [
            'name' => $user->username,
            'link' => 'https://yourwebsite.com/verify?email=' . base64_encode($user->email), // Link cố định cho việc xác thực
        ];
        Mail::to($user->email)->send(new WelcomeEmail($data));

        // Chuyển hướng người dùng về trang chủ
        return redirect()->route('home');
    }
}
