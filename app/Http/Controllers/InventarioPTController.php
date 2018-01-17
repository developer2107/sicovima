<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use SICOVIMA\producto;
use SICOVIMA\defectuosoPT;
use SICOVIMA\inventarioProductoTerminado;
use SICOVIMA\User;
use SICOVIMA\bitacora;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;

class InventarioPTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Listar()
    {
        return view("Proyecto.Desarrollo.InventarioPT.InventarioPT");
    }

    public function Ver($id)
    {
        $producto = producto::find($id);
        $inventariopt = inventarioProductoTerminado::all();
        $defectuosopt = defectuosoPT::all();
        // $exis = inventarioProductoTerminado::find($producto->id);
        // //$productos = producto::where('estado_Prod',1)->get();        
        // $inventarioProductoTerminados = inventarioProductoTerminado::all();
        $exis = inventarioProductoTerminado::where('id_Producto',$producto->id)->get()->last();
        $defec = defectuosoPT::where('id_Producto',$producto->id)->get()->last();
        return view("Proyecto.Desarrollo.InventarioPT.VerInventarioPT",compact('producto','inventariopt','defectuosopt','exis','defec'));
    }

    public function Mostrar()
    {
        $producto = producto::all();
        $inventario = inventarioProductoTerminado::where('id_Producto',22)->get()->last();
        
        return view("Proyecto.Desarrollo.InventarioPT.InventarioPT")->with('producto', $producto)->with('inventario', $inventario);//
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
        return "Aqui esta el inventario productos terminados";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function Reportes()
    {
        return view("Proyecto.Desarrollo.InventarioPT.ReportesIPT");
    }

    public static function motivosProd($idMotProd,$motivoProd,$descuentoProd){
        $vv = inventarioProductoTerminado::where('id_Producto',$idMotProd)->get()->last();
        $proo = producto::find($vv->id_Producto);

        if ($vv->nuevaExistencia_IPT!=1) {

            inventarioProductoTerminado::create([
                'tipoMovimiento_IPT'=>4,//salida por defecto
                'existencias_IPT'=>$vv->nuevaExistencia_IPT,//es el primer registro
                'cantidad_IPT'=>1,//defectuosos solo se pueden sacar 1 a la vez por el estado y el tipo de movimiento
                'fechaMov_IPT'=>$vv->updated_at,
                'nuevaExistencia_IPT'=>$vv->nuevaExistencia_IPT-1,
                'id_Producto'=>$proo->id,
            ]);

            $ultProd = producto::create([
                'tipo_Prod'=>$proo->tipo_Prod,
                'estilo_Prod'=>$proo->estilo_Prod,
                'descripcion_Prod'=>$proo->descripcion_Prod, 
                'precio_Prod'=>$proo->precio_Prod - $descuentoProd, 
                'color_Prod'=>$proo->color_Prod, 
                'talla_Prod'=>$proo->talla_Prod, 
                'imagen_Prod'=>$proo->imagen_Prod, 
                'estado_Prod'=>1,
                'estado2_Prod'=>1,
            ]);

            bitacora::bitacoras('Modificación','Modificación de producto '.$proo->id.': '.$proo->tipo_Prod.' '.$proo->estilo_Prod);
            bitacora::bitacoras('Registro','Registro de producto defectuoso'.$ultProd->id.' por modificación: '.$ultProd->tipo_Prod.' '.$ultProd->estilo_Prod);


            inventarioProductoTerminado::create([
                'tipoMovimiento_IPT'=>3,//entrada por defecto
                'existencias_IPT'=>0,//es el primer registro
                'cantidad_IPT'=>1,//defectuosos solo se pueden insertar 1 a la vez por el estado
                'fechaMov_IPT'=>$ultProd->created_at,
                'nuevaExistencia_IPT'=>0+1,
                'id_Producto'=>$ultProd->id,
            ]);

            defectuosoPT::create([
                'cantidad_DPT'=>1,
                'descripcion_DPT'=>$motivoProd,
                'id_Producto'=>$ultProd->id,
                'descuento_DPT'=>$descuentoProd,
            ]); 
        

        }else{
            $proo->precio_Prod = $proo->precio_Prod - $descuentoProd;
            $proo->estado2_Prod = 1;
            $proo->save();

            defectuosoPT::create([
                'cantidad_DPT'=>1,
                'descripcion_DPT'=>$motivoProd,
                'id_Producto'=>$proo->id,
                'descuento_DPT'=>$descuentoProd,
            ]); 

            bitacora::bitacoras('Modificación','Modificación de producto '.$proo->id.' por defecto: '.$proo->tipo_Prod.' '.$proo->estilo_Prod);
        
        }
        
        return 0;
    }

    public function crearReporteInventario($vistaurl,$tipo)
    {
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if ($tipo==1) {
            return $pdf->stream('ReporteInventario.pdf');
        }
        if ($tipo==2) {
            return $pdf->download('ReporteInventario.pdf');
        }
    }

    public function ReporteInventario($tipo)
    {
        $vistaurl="Proyecto.Desarrollo.InventarioPT.ReporteInventario";
        return $this->crearReporteInventario($vistaurl,$tipo);
    }

    public function crearReportePB($vistaurl,$tipo)
    {
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if ($tipo==1) {
            return $pdf->stream('ReporteProductosBuenEstado.pdf');
        }
        if ($tipo==2) {
            return $pdf->download('ReporteProductosBuenEstado.pdf');
        }
    }

    public function ReportePB($tipo)
    {
        $vistaurl="Proyecto.Desarrollo.InventarioPT.ReportePB";
        return $this->crearReportePB($vistaurl,$tipo);
    }

    public function crearReportePD($vistaurl,$tipo)
    {
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if ($tipo==1) {
            return $pdf->stream('ReporteProductosDaniados.pdf');
        }
        if ($tipo==2) {
            return $pdf->download('ReporteProductosDaniados.pdf');
        }
    }

    public function ReportePD($tipo)
    {
        $vistaurl="Proyecto.Desarrollo.InventarioPT.ReportePD";
        return $this->crearReportePD($vistaurl,$tipo);
    }
}
