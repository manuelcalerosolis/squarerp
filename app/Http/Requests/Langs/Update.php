<?php

namespace App\Http\Requests\Lang;

use App\Http\Requests\Request;

class Update extends Request
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
            'name'          => ['required', 'min:4', 'unique:langs,name,'.$this->route('langs')],
            'iso_code'      => ['required', 'min:2', 'unique:langs,iso_code,'.$this->route('langs')],
            'language_code' => ['required', 'min:5', 'unique:langs,language_code,'.$this->route('langs')]
        ];
    }

}
