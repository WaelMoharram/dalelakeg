<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
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
            'title_ar'=>'required|string|min:2|max:191',
            'title_en'=>'required|string|min:2|max:191',
            'content_ar'=>'required|string',
            'content_en'=>'required|string',
            'image1'=>'nullable|required_without:_method|image',
            'image2'=>'nullable|required_without:_method|image',
            'image3'=>'nullable|required_without:_method|image',
            'image4'=>'nullable|required_without:_method|image',
        ];
    }

    public function attributes()
    {
        return [
            'title_ar'=>__('Title in Arabic'),
            'title_en'=>__('Title in English'),
            'content_ar'=>__('Content in Arabic'),
            'content_en'=>__('Content in English'),
            'image1'=>__('Image'),
            'image2'=>__('Image'),
            'image3'=>__('Image'),
            'image4'=>__('Image'),
        ];
    }
}
