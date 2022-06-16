<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'oldpassword' => 'required',
            'newpassword' => 'min:6|max:250|confirmed',
            'newpassword_confirmation' => 'required',


        ];
    }

    public function messages()
    {
        return [
            'oldpassword.required' => 'обязательное поле',
            'newpassword_confirmation.required' => 'обязательное поле',
            'newpassword.confirmed' => 'пароль не совпадает',
            'newpassword.min'  => 'новый пароль должен содержать не менее 6 символов',
            'newpassword.max' => 'новый пароль должен содержать не более 250 символов'
        ];
    }

}
