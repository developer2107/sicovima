<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;

use SICOVIMA\users;

class SeguridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Usuario = users::orderBy('name','ASC')->orderBy('estado','ASC')->paginate(5);
      return view("Proyecto.Desarrollo.Seguridad.BuscarUsuario")->with('Usuario', $Usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view("Proyecto.Desarrollo.Seguridad.RegistrarUsuario");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $name = $request['name'];
      $tipo_Usuario = $request['radioInline'];
      $nameUsers = $request['nameUsers'];
      $email = $request['email'];
      $password = $request['password'];
      $fecha= date('d-m-Y');
      $estado = $request['estado'];


      $Usuario = \SICOVIMA\Users::create([
        'name'=> $name,
        'email'=> $email,
        'password' => bcrypt($password),
        'tipo' => $tipo_Usuario,
        'estado'=> $estado,
        'nombreUsuario_Usu' => $nameUsers,
        'fechaRegistro_Usu' => $fecha,
      ]);

      return redirect()->route('Usuario.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Usuarioedit = users::find($id);
      return view("Proyecto.Desarrollo.Seguridad.VerUsuario")->with('Usuarioedit',$Usuarioedit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $Usu = users::find($id);

      return view("Proyecto.Desarrollo.Seguridad.ModificarUsuario")->with('Usu', $Usu);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = users::find($id);
      if ($request->accion === "estado") {
        # code...
        if ($request->estado === 'Activo') {
          # code...
          $user->estado = 'Inactivo';
          $user->save();
        }else {
          $user->estado = 'Activo';
          $user->save();
        }

      }else {
        # code...

        $user->name = $request->name;
        $user->email = $request->email;
        $user->tipo = $request->radioInline;
        // $user->password = $request->password;
        $user->save();
      }


        return redirect()->route('Usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
