<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests\UsuariocRequest;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\bitacora;
use SICOVIMA\fecha;
use SICOVIMA\User;
use Input;
use Session;

class BitacoraController extends Controller
{
    public function index()
    {
        $bitas = bitacora::all();
        $userss = User::all();
        return view('Proyecto.Desarrollo.Seguridad.Bitacora',compact('bitas','userss'));
    }

    public function store(Request $request)
    {
        /**
         * undocumented constant
         **/
        
        
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

    public function crearReporteBitacoras($vistaurl,$tipo)
    {
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if ($tipo==1) {
            return $pdf->stream('ReporteBitacoras.pdf');
        }
        if ($tipo==2) {
            return $pdf->download('ReporteBitacoras.pdf');
        }else{
            $bitas = bitacora::all();
        $userss = User::all();
        return view('Proyecto.Desarrollo.Seguridad.Bitacora',compact('bitas','userss'));
        }

    }

    public function ReporteBitacoras($tipo)
    {
        $vistaurl="Proyecto.Desarrollo.Seguridad.ReporteBitacoras";
        return $this->crearReporteBitacoras($vistaurl,$tipo);
    }
}
