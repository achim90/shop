<?php

namespace App\Http\Requests\Product;

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
            'title' => 'required|string',
            'price_in' => '',
            'percent' => '',
            'unit' => '',
            'amount' => '',
//            'price_wholesale' => '',
//            'price_out' => '',
            'category_id' => '',
            'brand_id' => '',
        ];
    }
}
