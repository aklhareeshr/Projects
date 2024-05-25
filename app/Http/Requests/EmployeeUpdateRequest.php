<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'f_name' => 'required',
            'l_name' => 'required',
            'emp_email' => 'required',
            'emp_phone' => 'required',
            'companies' => 'nullable|exists:companies,id',
        ];
    }
    public function messages()
    {
        return [
            'f_name.required' => ' First Name is required!',
            'l_name.required' => ' Last Name is required!',
            'emp_email.required' => ' Email is required!',
            'emp_phone.required' => ' Phone Number is required!',
        ];
    }
}
