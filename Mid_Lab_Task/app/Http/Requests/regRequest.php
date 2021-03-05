<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class regRequest extends FormRequest
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
            'full_name' => 'required|max:30|min:3|alpha',
            'username' => ['required', 'unique:customer,username',],
            'email' => ['required', 'email', 'min:10', 'max:50', 'unique:customer,email',],
            'password' => 'required|max:20|min:8|confirmed',
            'country' => 'required|max:20|min:3|alpha',
            'city' => 'required|max:20|min:3|alpha',
            'companyName' => 'required|max:20|min:3|alpha',
            'phone' => ['required', 'digits:11', 'numeric', 'unique:customer,email',],
        ];
    }
}
