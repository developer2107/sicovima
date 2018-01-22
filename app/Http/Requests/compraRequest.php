<?php

namespace SICOVIMA\Http\Requests;

use SICOVIMA\Http\Requests\Request;

class compraRequest extends Request
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
          'numFac_Com' => 'required',
          'nombre_Prov' => 'required',
          'fecha_Com' => 'date|required',
      ];
  }

public function messages()
{
  return [
      'numFac_Com.required' => 'Agrega el numero de factura.',
      'nombre_Prov.required' =>'Selecciona un proveedor.',
      'fecha_Com.required' => 'Seleciona una fecha.',

  ];
}
}
