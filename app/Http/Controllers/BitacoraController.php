<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests\UsuariocRequest;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\bitacora;
use SICOVIMA\users;

class BitacoraController extends Controller
{
    public function index()
    {
        $bitas = bitacora::all();
        $userss = users::all();
        return view('Proyecto.Desarrollo.Seguridad.Bitacora',compact('bitas','userss'));
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

    public function Tour()
    {
        return view('Proyecto.Desarrollo.Ventas.Tour');
   //
    }
    public function Factura()
    {
        return view('Proyecto.Desarrollo.Ventas.Factura');
   //
    }
    public function Reporte()
    {
        return view('Proyecto.Desarrollo.Ventas.Reporte');
   //
    }
    public function Reportes()
    {
        return view('Proyecto.Desarrollo.Ventas.Reportes');
   //
    }
}
