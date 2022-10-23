<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'content_ar'=>'required|string',
            'content_en'=>'required|string',
            'address_ar'=>'required|string',
            'address_en'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|email',
            'website'=>'required|string',
            'hotline'=>'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'content_ar'=>__('Content in Arabic'),
            'content_en'=>__('Content in English'),
            'address_ar'=>__('Address in Arabic'),
            'address_en'=>__('Address in English'),
            'phone'=>__('Phone'),
            'email'=>__('Email'),
            'hotline'=>__('Hotline'),
        ];
    }
}
