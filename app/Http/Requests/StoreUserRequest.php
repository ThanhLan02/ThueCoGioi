<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
            'repassword' => 'required|string|same:password',
            'hoten' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Bạn chưa nhập email',
            'hoten.required' => 'Bạn chưa nhập họ tên',
            'email.email' => 'Email chưa đúng định dạng, VD: abc@gmail.com',
            'email.unique' => 'Email đã đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu quá ngắn',
            'repassword.same' => 'Mật khẩu không khớp',
            'repassword.required' => 'Chưa nhập mật khẩu',
        ];
    }
}
