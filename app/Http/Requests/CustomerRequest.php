<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
        $validation = [
            'txtNames' => 'required',
            'txtLastNames' => 'required',
            'txtNameUser' => 'required',
            'txtEmail' => 'required',
            'dtpBorn' => 'required|date',
            'txtRut' => 'required',
        ];

        if (\Route::is('app_customers.store'))
            $validation['txtPassword'] = 'required';
        return $validation;
    }
}
