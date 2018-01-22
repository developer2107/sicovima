<?php

namespace SICOVIMA\Http\Requests;

use SICOVIMA\Http\Requests\Request;

class ventaRequest extends Request
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
             'clientes'=>'required',
             'fecha_Ven'=>'required|date',
             'numeroDoc'=>'required',
         ];
     }
     public function messages()
     {
         return [
             'clientes.required' => 'Selecciona un cliente.',
             'fecha_Ven.required' =>'Selecciona una fecha.',
             'numeroDoc.required' => 'Seleciona un numero de factura.',

         ];
     }
}
