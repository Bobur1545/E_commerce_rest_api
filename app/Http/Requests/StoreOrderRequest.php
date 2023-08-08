<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
             'delivery_method_id' => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'products' => 'required|array:product_id,stock_id,quantity',
            'products.*.product_id' => 'required|numeric',
            'products.*.quantity' => 'required|numeric',
            'products.*.stock' => 'nullable|numeric',
            'comment' => 'nullable|max:500'
        ];
    }
}
