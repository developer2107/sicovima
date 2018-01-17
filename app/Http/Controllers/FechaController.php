<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\cliente;
use SICOVIMA\documento;
use SICOVIMA\fecha;
use SICOVIMA\detalleVenta;
use SICOVIMA\venta;
use SICOVIMA\documentoVenta;
use SICOVIMA\clienteJuridico;
use SICOVIMA\producto;
use SICOVIMA\inventarioProductoTerminado;
use SICOVIMA\estadoDocumento;
use SICOVIMA\defectuosoPT;
use SICOVIMA\User;
use SICOVIMA\bitacora;


class FechaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    
    public function Index()
    {
    
        return view('Proyecto.Desarrollo.Ventas.ReportesVentas');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect("ReporteTodasVentas/1");//factura credito fiscal
        
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
