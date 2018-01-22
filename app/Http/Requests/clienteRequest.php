<?php

namespace SICOVIMA\Http\Requests;

use SICOVIMA\Http\Requests\Request;

class clienteRequest extends Request
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
           'nombreCliente' => 'required',
           'duiCliente' => 'required',
           'direccionCliente' => 'required',
           'departamentos' => 'required',
           'municipios' => 'required',
         ];
     }
     public function messages()
     {
         return [
             'nombreCliente.required' => 'Agrega el nombre del cliente.',
             'duiCliente.required' =>'Agrega el dui.',
             'tel[].required' => 'Agrega el o los telefonos.',
             'cor[].required' => 'Agrega el o los correos.',
             'direccionCliente.required' => 'Agrega una direccion.',
             'departamentos.required' => 'Selecciona el departamento.',
             'municipios.required' => 'Selecciona el municipio.',

         ];
     }
}
