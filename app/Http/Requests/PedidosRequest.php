<?php

namespace SICOVIMA\Http\Requests;

use SICOVIMA\Http\Requests\Request;

class PedidosRequest extends Request
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
     
     public function rules()
     {
         return [
             'clientes'=>'required',
             'fecha_Ped'=>'required',
             'numeroDoc'=>'required',
             'fechaEntregar_Ped'=>'required',
             'fechaRecibir_Ped'=>'required',
         ];
     }
     public function messages()
     {
         return [
             'clientes.required' => 'Selecciona un cliente.',
             'fecha_Ped.required' =>'Selecciona una fecha.',
             'numeroDoc.required' => 'Seleciona un numero de factura.',
             'fechaEntregar_Ped.required' => 'Seleciona una fecha den entrega.',
             'fechaRecibir_Ped.required' => 'Seleciona una fecha den recibo.',

         ];
     }
}
