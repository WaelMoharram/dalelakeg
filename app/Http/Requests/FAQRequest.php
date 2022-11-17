<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequest extends FormRequest
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
            'question.*'=>'required|string|min:2|max:191',
            'answer.*'=>'required|string',
            'question_icon'=>'required',
        ];
    }

    public function attributes()
    {
        return [
            'question.ar'=>__('Title in Arabic'),
            'question.en'=>__('Title in English'),
            'answer.ar'=>__('Content in Arabic'),
            'answer.en'=>__('Content in English'),
            'question_icon'=>__('Image'),
        ];
    }
}
