<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'name.*' => 'required|string',
            'image1' =>'required_without:_method|image',
            'image2' =>'required_without:_method|image',

        ];
    }

    public function attributes()
    {
        return [
            'name.ar' => __('Name in Arabic'),
            'name.en' => __('Name in English'),
            'image1' => __('Image1'),
            'image2' => __('Image2'),
        ];
    }
}
