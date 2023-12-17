<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoimatkhauRequest extends FormRequest
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
            'password' => 'required',
            'repassword' => 'required|same:password',
            'email' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'email.required' => 'Bạn chưa nhập email',
            'repassword.same' => 'Mật khẩu không khớp',
            'repassword.required' => 'Bạn chưa nhập lại mật khẩu'
        ];
    }
}
