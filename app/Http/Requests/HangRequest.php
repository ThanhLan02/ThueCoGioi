<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HangRequest extends FormRequest
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
            'tenhang' => 'required|unique',
        ];
    }
    public function messages()
    {
        return [
            'tenhang.required' => 'Bạn chưa nhập tên hãng',
            'tenhang.unique' => 'Hãng này đã có ',
        ];
    }
}
