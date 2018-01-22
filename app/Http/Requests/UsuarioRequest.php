<?php

namespace SICOVIMA\Http\Requests;

use SICOVIMA\Http\Requests\Request;

class UsuarioRequest extends Request
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
             'nameUsers'=>'required',
             'email'=>'required',
             'password'=>'required',
         ];
     }
     public function messages()
     {
         return [
             'name.required' => 'Agrega un nombre.',
             'nameUsers.required' =>'Agrega un nombre de usuario.',
             'email.required' => 'Agrega un correo.',
             'password.required' => 'Agrega la password.',

         ];
     }
}
