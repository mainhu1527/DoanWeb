<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mail'=>'required',
            'password'=>'required',
            //
        ];
    }
    public function messages()
    {
        return[
            'email.required'=>'Vui lòng nhập tên tài khoản'
            'password.required'=>'Vui lòng nhập tài khoản'
        ];
    }
}
