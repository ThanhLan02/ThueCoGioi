<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhuyenMaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'giatrikm' => 'required|int',
            'ngaybd' => 'required|date',
            'ngaykt' => 'required|date',
            'tenkm' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'tenkm.required' => 'Bạn chưa nhập tên khuyến mãi',
            'giatrikm.required' => 'Bạn chưa nhập giá trị khuyến mãi',
            'giatrikm.int' => 'Bạn giá trị khuyến mãi không đúng',
            'ngaybd.required' => 'Bạn chưa nhập ngày bắt đầu khuyến mãi',
            'ngaykt.required' => 'Bạn chưa nhập ngày kết thúc khuyến mãi',
        ];
    }
}
