<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEntityRequest extends Request
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
            'company'      => ['required', 'min:6','unique:entities'],
            'first_name'     => ['required','min:6' ],
            'last_name'  => ['required', 'min:6']
        ];
    }
}
