<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThietBiRequest extends FormRequest
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
            'TenTB' => 'required',
            'MoTa' => 'required',
            'File' => 'required',
            'Anh' => 'required',
            'GiaThue' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'TenTB.required' => 'Bạn chưa nhập tên thiết bị',
            'MoTa.required' => 'Bạn chưa nhập mô tả thiết bị',   
            'File.required' => 'Bạn chưa chọn file thiết bị',
            'Anh.required' => 'Bạn chưa chọn ảnh thiết bị',
            'GiaThue.required' => 'Bạn chưa nhập giá thiết bị',
        ];
    }
}
