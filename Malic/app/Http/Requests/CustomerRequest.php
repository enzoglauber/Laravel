<?php

namespace Malic\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email'
            // 'quantidade' => 'required|numeric',
            // 'descriptopm' => 'required|max:250',
        ];
    }

    public function messages()
    {
        return [
            'required' => "O :attribute é obrigatorio!"
            // 'name.required' => "O :attribute é obrigatorio!"
        ];
    }
}
