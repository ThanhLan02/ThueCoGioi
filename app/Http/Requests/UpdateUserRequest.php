<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users,email,'.$this->id.'',
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
        ];
    }
}
