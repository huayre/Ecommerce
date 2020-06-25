<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestCategory extends FormRequest
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
            'name'=>'required',
            'description'=>'required',
            'state'=>'required'
        ];
    }

    public function messages()
    {
        return [
           'name.required'=>'El nombre de la categoría es obligatorio',
            'description.required'=>'La descripción de la categoría es obligatorio',
            'state.required'=>'Marque uno de los estados'
        ];
    }
}
