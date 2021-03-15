<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class salesVarify extends FormRequest
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
            'customer_name' => 'min:3|max:30|required|regex:/^[\pL\s\-]+$/u',
            'address' => 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
            'phone' => ['required','digits_between:11,15','numeric'],
            'product_id' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required|numeric|min:5',
            'quantity' => 'required|numeric|max:20|min:5',
            'total_price' => 'required|numeric|min:5',
            'payment_type' => 'required',
        ];
    }
}
