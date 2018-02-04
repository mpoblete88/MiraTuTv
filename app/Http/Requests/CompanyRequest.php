<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
         'name'       => 'required',
         'short_name' => 'required',
         'web_site'   => 'required',
        ];

        if (!is_null($this->favicon_path)) {
            $validation['favicon_path'] = 'required|mimes:ico,icon';
        }

        if (!is_null($this->logo_path)) {
            $validation['logo_path'] = 'required|mimes:jpeg,png';
        }

        if (!is_null($this->logo_dark_path)) {
            $validation['logo_dark_path'] = 'required|mimes:jpeg,png';
        }

        if (!is_null($this->logo_light_path)) {
            $validation['logo_light_path'] = 'required|mimes:jpeg,png';
        }


        return $validation;
    }
}
