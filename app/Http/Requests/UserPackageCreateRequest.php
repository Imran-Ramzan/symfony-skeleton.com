<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPackageCreateRequest extends FormRequest
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
            'country_id' =>['required'],
            'package_id' =>['required'],
            'number_of_selected_package' =>['required'],
            'number_of_selected_user' =>['required'],
            'description' =>['required'],
        ];
    }
}
