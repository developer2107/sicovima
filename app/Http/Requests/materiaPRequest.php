<?php

namespace SICOVIMA\Http\Requests;

use SICOVIMA\Http\Requests\Request;

class materiaPRequest extends Request
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
             'nombre_MP'=>'required',
             'tipo_MP'=>'required',
             'color_MP'=>'required',
             'precio_MP'=>'required',
             'unidadMedida_MP'=>'required',
         ];
     }
     public function messages()
     {
         return [
             'nombre_MP.required' => 'Agrega un nombre.',
             'tipo_MP.required' =>'Selecciona una tipo de materia prima.',
             'color_MP.required' => 'Agrega un color.',
             'precio_MP.required' => 'Selecciona un precio.',
             'unidadMedida_MP.required' => 'Agrega unidad de medida.',

         ];
     }
}
