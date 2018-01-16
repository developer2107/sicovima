<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests\UsuariocRequest;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\bitacora;
use SICOVIMA\fecha;
use SICOVIMA\User;

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
         $datoFecha = explode("/",(String)$request->fecha_i);
        $fechaOrdenada = $datoFecha[2]."-".$datoFecha[1]."-".$datoFecha[0];
        $datoFecha2 = explode("/",(String)$request->fecha_f);
        $fechaOrdenada2 = $datoFecha2[2]."-".$datoFecha2[1]."-".$datoFecha2[0];
        $nuevaFecha = fecha::create([
            'fechai'=>$fechaOrdenada,
            'fechaf'=>$fechaOrdenada2,
        ]);

        return redirect("ReporteBitacoras/1/{$nuevaFecha->id}");
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

    public function crearReporteBitacoras($vistaurl,$tipo,$nuevaFecha)
    {
        $date = date('Y-m-d');
        $nuevaF = $nuevaFecha;
        $view = \View::make($vistaurl, compact('date','nuevaF'))->render();
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

    public function ReporteBitacoras($tipo,$nuevaFecha)
    {
        $vistaurl="Proyecto.Desarrollo.Seguridad.ReporteBitacoras";
        return $this->crearReporteBitacoras($vistaurl,$tipo,$nuevaFecha);
    }
}
