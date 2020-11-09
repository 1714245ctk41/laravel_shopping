<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest  extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products|max:255|min:4',
            'price' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên đã tồn tại',
            'name.max' => 'Tên lớn nhất 255 kí tự',
            'name.min' => 'Tên ít nhất 4 kí tự',

            'price.required' => 'Giá không được để trống',
            'category_id.required' => 'Thể loại không được để trống',
            'content.required' => 'Nội dung không được để trống',


            'body.required' => 'A message is required',
        ];
    }
}