<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\departamento;
use SICOVIMA\municipio;
use SICOVIMA\cliente;
use SICOVIMA\clienteJuridico;
use SICOVIMA\clienteNatural;
use SICOVIMA\correoCliente;
use SICOVIMA\telefonoCliente;

class BitacoraController extends Controller
{
    public function index()
    {
        return view("Proyecto.Desarrollo.Seguridad.Bitacora");
    
    }
    
    public function Mostrar()
    {
    
    }

    public function create()
    {
      return view("Proyecto.Desarrollo.Seguridad.Bitacora");
    }

    public function Ver()
    {
     return view("Proyecto.Desarrollo.Seguridad.Bitacora");
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
