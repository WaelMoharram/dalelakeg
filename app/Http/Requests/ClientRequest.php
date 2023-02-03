<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'title.*' => 'required|string',
            'description.*' => 'required|string',
            'image' =>'required_without:_method|image',

        ];
    }

    public function attributes()
    {
        return [
//            'name.ar' => __('Name in Arabic'),
//            'name.en' => __('Name in English'),
//            'image' => __('Image'),
        ];
    }
}