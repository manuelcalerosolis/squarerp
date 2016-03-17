<?php

namespace App\Http\Requests\Entity;

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
            'company'    => ['required', 'min:3','unique:entities'],
            'first_name' => ['required', 'min:3'],
            'last_name'  => ['required', 'min:3']
        ];
    }
}
