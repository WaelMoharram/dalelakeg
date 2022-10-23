<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class PersonalServiceRequest extends FormRequest
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
            'image'=>'nullable|required_without:_method|image',
            'content_en'=>'required|string',
            'content_ar'=>'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'image'=>__('Image'),
            'content_en'=>__('Content in English'),
            'content_ar'=>__('Content in Arabic'),
        ];
    }
}
