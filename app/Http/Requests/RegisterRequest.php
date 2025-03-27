<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' =>'required|email|unique:users|max:50|min:5',
            'username' =>'required|unique:users|min:6|alpha_num',
            'password' => 'required|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/',
        ];
    }
    public function messages(){
       return [
        'email.required' => "Địa chỉ email không được để trống",
        'email.email' => "Địa chỉ email không hợp lệ",
        'email.unique' => "Email này đã được sử dụng",
        'email.max' => "Tối đa 50 kí tự",
        'email.min' => "Địa chỉ email phải từ 5 kí tự trở lên",

        'username.required' => "Tên tài khoản không được để trống",
        'username.unique' => "Tên tài khoản đã được sử dụng",
        'username.min' => "Tên tài khoản phải từ 6 kí tự",
        'username.alpha_num' => "Tên tài khoản không được chứ kí tự đặc biệt",

        'password.required' => 'Mật khẩu không được để trống',
        'password.min' => 'Mật khẩu phải chứ 8 kí tự trở lên',
        'password.regex' => 'Mật khẩu phải chứa 1 kí tự in hoa và 1 số',
       ];
    }
}
