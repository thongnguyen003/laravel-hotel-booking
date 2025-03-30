<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class edit_profile extends FormRequest
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
            'name'  => 'required|string|max:255', 
            'phone' => 'required|string|regex:/^[0-9]{10,15}$/',
            'gender'=> 'required|in:male,female,other', 
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string'   => 'The name must be a string.',
            'phone.required' => 'The phone number is required.',
            'phone.regex'    => 'The phone number must be between 10 and 15 digits.',
            'gender.required'=> 'Please select a gender.',
            'gender.in'      => 'Gender must be one of the following: male, female, or other.',
        ];
    }
}
