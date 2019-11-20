<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formularioexamen extends FormRequest
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
            'name'=>'min:2|max:20',
            'email'=>'e-mail',
            'password'=>'min:8|max:10|',
            'likes'=>'integer',
        ];
    }
}
