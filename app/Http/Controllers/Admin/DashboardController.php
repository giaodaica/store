<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Mail\ResetPasswordEmail; // Giả sử bạn đã tạo mail class ResetPasswordEmail
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard.index');
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

    public function sendEmail()
    {
        // Dữ liệu email
        $data = ['message' => 'Đây là một email thử nghiệm'];

        // Gửi email
        Mail::to('trunghieu042000@gmail.com')->send(new TestEmail($data));

        return 'Email đã được gửi!';
    }
    public function resetpasss(){
        return view('pages.auth.reset');
    }
    public function quenmatkhau(Request $request)
    {
        // Xác thực email
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Lấy người dùng từ email
        $user = User::where('email', $request->email)->first();

        // Tạo mật khẩu mới ngẫu nhiên
        $newPassword = "Admin1234"; // Tạo mật khẩu ngẫu nhiên có độ dài 8 ký tự

        // Cập nhật mật khẩu trong cơ sở dữ liệu
        $user->password = bcrypt($newPassword);
        $user->save();

        // Gửi email với mật khẩu mới
        $data = [
            'name' => $user->username,
            'newPassword' => $newPassword, // Truyền mật khẩu mới vào email
        ];

        // Gửi email cho người dùng
        Mail::to($user->email)->send(new ResetPasswordEmail($data));

        // Thông báo cho người dùng
        return redirect()->back()->with('status', 'Mật khẩu mới đã được gửi vào email của bạn.');
    }
}
