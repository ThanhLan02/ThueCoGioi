<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaixeRequest extends FormRequest
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
            'TenTX' => 'required',
            'SDT' => 'required',
            'DiaChi' => 'required',
            'Email' => 'required|email',
            'Anh' => 'required',
            'MoTa' => 'required',
            'GiaThue' => 'required|int',
        ];
    }
    public function messages()
    {
        return [
            'TenTX.required' => 'Bạn chưa nhập tên tài xế',
            'SDT.required' => 'Bạn chưa nhập SĐT tài xế',   
            'DiaChi.required' => 'Bạn chưa nhập địa chỉ tài xế',
            'Email.required' => 'Bạn chưa nhập email tài xế',
            'Email.email' => 'Email chưa đúng định dạng',
            'Anh.required' => 'Bạn chọn nhập ảnh tài xế',
            'MoTa.required' => 'Bạn chưa nhập mô tả tài xế',
            'GiaThue.required' => 'Bạn chưa nhập giá thuê tài xế',
            'GiaThue.int' => 'Hãy nhập số',
        ];
    }
}
