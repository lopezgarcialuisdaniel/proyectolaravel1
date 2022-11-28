<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
    //Se agregan las reglas a validar
    public function rules()
    {
        return [
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            'image' => 'image'
        ];
    }
}
