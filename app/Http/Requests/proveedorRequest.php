<?php

namespace SICOVIMA\Http\Requests;

use SICOVIMA\Http\Requests\Request;

class proveedorRequest extends Request
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
             'nombre_Prov'=>'required',
             'NIT_Prov'=>'required',
             'direccion_Prov'=>'required',
         ];
     }
     public function messages()
     {
         return [
             'nombre_Prov.required' => 'Agrega un nombre.',
             'NIT_Prov.required' =>'Agrega en NIT del proveedor.',
             'direccion_Prov.required' => 'Agrega una direccion.',
             'departamentos.required' => 'Selecciona un departamento.',
             'municipios.required' => 'Selecciona un municipio.',

         ];
     }
}
