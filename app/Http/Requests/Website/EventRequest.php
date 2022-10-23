<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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

            'content'=>'required|string',
            'video_url'=>'required|string',
            'image'=>'nullable|required_without:_method|image',

        ];
    }

    public function attributes()
    {
        return [
            'content'=>__('Content'),
            'video_url'=>__('Video URL'),
            'image'=>__('Image'),

        ];
    }
}
