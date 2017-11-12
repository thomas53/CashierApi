<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterEmployeeRequest extends FormRequest
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
            "identity_no" => "required|max:50|unique:employees",
            "name" => "required|max:255",
            "phone_no" => "required|max:13|unique:employees",
            "address" => "required",
            "created_by" => "required",
            "email" => "required|max:60|unique:employees|email",
        ];
    }
}
