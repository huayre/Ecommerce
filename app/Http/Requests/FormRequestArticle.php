<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestArticle extends FormRequest
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
            'model'=>'required',
            'subcategory_id'=>'required',
            'price'=>'required',
            'gender'=>'required',
            'description'=>'required',
            'size'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'model.required'=>'El nombre o modelo del artículos es obligatorio',
            'subcategory_id.required'=>'Seleccione una subcategoría',
            'price.required'=>'Ingrese el précio',
            'gender.required'=>'Seleccione un género',
            'description.required'=>'Ingrese la descripción',
            'size.required'=>'Selecione por lo menos una talla'
        ];

    }
}
