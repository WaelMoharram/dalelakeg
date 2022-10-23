<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
         //   'image'=>'nullable|required_without:_method|image',
            'title_en'=>'required|string|min:2|max:191',
            'title_ar'=>'required|string|min:2|max:191',
            'content_en'=>'required|string',
            'content_ar'=>'required|string',
        ];
    }

    public function attributes()
    {
        return [
          //  'image'=>__('Image'),
            'title_en'=>__('Title in English'),
            'title_ar'=>__('Title in Arabic'),
            'content_en'=>__('Content in English'),
            'content_ar'=>__('Content in Arabic'),
        ];
    }
}
