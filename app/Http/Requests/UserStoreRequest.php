<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'email' => 'email|required|unique:users',
            'username' => 'required|min:8|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'min:6',
            'address_1' => 'required',
            'address_2' => 'required',
            'telephone' => 'required',
            'city' => 'required',
            'zip_postal_code' => 'required'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'email.unique' => 'Email is already exist',
            'name.required' => 'Name is required!',
            'username.required' => 'Username is required',
            'username.min' => 'Username must be at least 8 characters',
            'username.unique' => 'Username you entered are already exist',
            'password.required' => 'Password is required!',
            'address_1.required' => 'Address 1 is required!',
            'address_2.required' => 'Address 2 is required!',
            'city.required' => 'City is Required',
            'telephone.required' => 'Telephone is required',
            'state_province.required' => 'State/Province is Required',
            'zip_postal_code.required' => 'Zip/Postal Code is required',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.min' => 'The password must be at least 8 characters long.',
            'name.min' => 'Must be atleast 3 characters'

        ];
    }
}
