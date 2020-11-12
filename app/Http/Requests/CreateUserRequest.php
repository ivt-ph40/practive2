<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|min:3|max:10',
            'password' => 'required|numeric|min:6',
            'email' => 'required|email|unique:users,email'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Băts buộc nhập name',
            'name.min' => 'name ít nhất 3 kí tự',
            'name.max' => 'name nhiều nhất 10 kí tự',
            'email.email' => 'email sai định dạng',
            'email.required' => 'email băts buộc nhập',
            'email.unique' => 'email phải là duy nhất',
            'password.numeric' => 'password phải là số'
        ];
    }
}
