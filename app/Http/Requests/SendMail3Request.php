<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMail3Request extends FormRequest
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
            'cv' => 'required|mimes:pdf,doc,docx'
        ];
    }

    public function messages()
    {
        return [
            'cv.mimes' =>  ' Please, choose a pdf, doc, or docx file',
        ];
    }
}
