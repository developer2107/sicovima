<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests\UsuariocRequest;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\bitacora;
use SICOVIMA\users;

class BitacoraController extends Controller
{
    public function index(Request $request)
    {
        $usuario=$request->usuario;
        $bitacoras=bitacora::buscar($usuario);
        return view('bitacoras.index',compact('bitacoras','usuario'));
    
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
