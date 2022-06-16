<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'email' => 'email|min:2|max:255',
            'name' => 'min:1|max:255',
        ];

    }

    public function messages()
    {
        return [
            'name.min' => 'Имя должно содержать не менее 1 символа',
        ];
    }

}




