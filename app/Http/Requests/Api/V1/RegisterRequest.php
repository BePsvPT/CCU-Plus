<?php

namespace App\Http\Requests\Api\V1;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'  => 'required|integer|digits_between:9,9|unique:users',
            'password'  => 'required',
            'nickname'  => 'required|min:3|max:12|unique:users',
            'email'     => 'required|email|max:48',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
}
