<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|confirmed',
            'bank_details' => 'nullable|string',
            'address' => 'nullable|string',
            'treaty' => 'nullable|integer',
            'phone_number' => 'nullable|integer',
            'contact_name' => 'nullable|string',
        ];
    }
}
