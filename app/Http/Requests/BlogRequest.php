<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title'=>'required|string|min:2|max:191',
            'content'=>'required|string',
            'lang'=>'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'image'=>__('Image'),
            'title'=>__('Title'),
            'content'=>__('Content'),
            'lang'=>__('Blog language'),
        ];
    }
}
