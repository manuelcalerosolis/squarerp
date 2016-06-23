<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\Request;

class Create extends Request
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
            'ean13'     => ['required', 'min:12', 'unique:products'],
            'price'     => ['required', 'numeric', 'min:-9999999.999999', 'max:999999.999999']
        ];
    }
}
