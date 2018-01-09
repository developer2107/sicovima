<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\cliente;
use SICOVIMA\documento;
use SICOVIMA\detalleVenta;
use SICOVIMA\venta;
use SICOVIMA\documentoVenta;
use SICOVIMA\clienteJuridico;
use SICOVIMA\producto;
use SICOVIMA\inventarioProductoTerminado;
use SICOVIMA\estadoDocumento;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Modificar($id)
    {
        //echo $venta = venta::where('id',$id)->get()->first();
        $venta = venta::find($id);
        $clientes = cliente::all();
        $cliente = cliente::all();
        $productos = producto::where('estado_Prod',1)->get();        
        $arrayC = [];
        foreach ($clientes as $cliente) {
            $arrayC[$cliente->id]=$cliente->nombre_Cli;
        }

        $inventarioProductoTerminados = inventarioProductoTerminado::all();
        return view('Proyecto.Desarrollo.Ventas.ModificarVenta',compact('arrayC','inventarioProductoTerminados','venta','productos','cliente','clientes'));
    }

    public function Ver($id)
    {
        $venta = venta::find($id);
        $clientes = cliente::all();
        $cliente = cliente::all();
        $productos = producto::where('estado_Prod',1)->get();        
        $arrayC = [];
        foreach ($clientes as $cliente) {
            $arrayC[$cliente->id]=$cliente->nombre_Cli;
        }

        $inventarioProductoTerminados = inventarioProductoTerminado::all();
        return view('Proyecto.Desarrollo.Ventas.VerVenta',compact('arrayC','inventarioProductoTerminados','venta','productos','cliente','clientes'));
    }

    public function Mostrar()
    {
        $ventas = venta::with('cliente')->get();
        return view("Proyecto.Desarrollo.Ventas.MostrarListadeVentas",compact('ventas'))->with('ventas', $ventas);
    }

    public function Index()
    {
        // producto::create([
        //     'tipo_Prod'=>"Short Jeans",
        //     'estilo_Prod'=>"Corto y Alto",
        //     'descripcion_Prod'=>"Roto de ambas piernas, una rutura mediana en cada uno", 
        //     'precio_Prod'=>12.88, 
        //     'color_Prod'=>"Azul", 
        //     'talla_Prod'=>"28", 
        //     'imagen_Prod'=>"", 
        //     'estado_Prod'=>1,
        // ]);
        // producto::create([
        //     'tipo_Prod'=>"Pantalon",
        //     'estilo_Prod'=>"Tipo polo",
        //     'descripcion_Prod'=>"Cuello rallado blanco", 
        //     'precio_Prod'=>15.50, 
        //     'color_Prod'=>"Menta", 
        //     'talla_Prod'=>"28", 
        //     'imagen_Prod'=>"", 
        //     'estado_Prod'=>1,
        // ]);
        
        // // 
        // inventarioProductoTerminado::create([
        //         'tipoMovimiento_IPT'=>1,
        //         'existencias_IPT'=>0,
        //         'cantidad_IPT'=>20,
        //         'fechaMov_IPT'=>"2017-08-21",
        //         'nuevaExistencia_IPT'=>(0+20),
        //         'id_Producto'=>27,
        //     ]);
        // inventarioProductoTerminado::create([
        //         'tipoMovimiento_IPT'=>1,
        //         'existencias_IPT'=>0,
        //         'cantidad_IPT'=>9,
        //         'fechaMov_IPT'=>"2017-08-21",
        //         'nuevaExistencia_IPT'=>(0+9),
        //         'id_Producto'=>28,
        //     ]);


        $productos = producto::where('estado_Prod',1)->get();
        $cliente = cliente::all();
        $inventarioProductoTerminados = inventarioProductoTerminado::all();
        return view('Proyecto.Desarrollo.Ventas.RegistrarVentas',compact('cliente','productos'))->with('cliente', $cliente)->with('inventarioProductoTerminados', $inventarioProductoTerminados);
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

        $cantidadV=$request->cantidadV;
        $idV=$request->idV;
        $costoProdV=$request->costoProdV;
        $gananciaV=$request->gananciaV;

        $documento = documento::create([
            'tipo_Doc'=>$request->tipo_Doc,
            'tipoPago_Doc'=>2,
            'fechaEmision_Doc'=>$request->fecha_Ven,
            'estado_Doc'=>0,
            'numero_Doc'=>$request->numeroDoc,
        ]);
        $contador=0;
        for ($i=0; $i < count($cantidadV); $i++) {
            $contador=$contador+$cantidadV[$i];# code...
        }

        $venta = venta::create([
            'can_Ven'=>$contador,
            'fecha_Ven'=>$request->fecha_Ven,
            'total_Ven'=>$request->total_Ven,
            'id_Cliente'=>$request->clientes,
            'estado_Ven'=>1,
        ]);

        for ($i=0; $i < count($idV); $i++) {
            $inventario = inventarioProductoTerminado::where('id_Producto',$idV[$i])->get()->last();
            inventarioProductoTerminado::create([
                'tipoMovimiento_IPT'=>2,
                'existencias_IPT'=>$inventario->nuevaExistencia_IPT,
                'cantidad_IPT'=>$cantidadV[$i],
                'fechaMov_IPT'=>$request->fecha_Ven,
                'nuevaExistencia_IPT'=>$inventario->nuevaExistencia_IPT-$cantidadV[$i],
                'id_Producto'=>$idV[$i],
            ]);

            detalleVenta::create([
            'cant_DVen'=>$cantidadV[$i],
            'costoProd_DVen'=>$costoProdV[$i],
            'id_Venta'=>$venta->id,
            'id_Producto'=>$idV[$i],
            'gananciaProd_DVen'=>$gananciaV[$i],
            ]);# code...
        }

        $documentoVenta = documentoVenta::create([
            'id_Venta'=>$venta->id,
            'id_Documento'=>$documento->id,
        ]);

        return redirect("/RegistrarVenta");
    }

    public function ListaProductos()
    {
        $producto= producto::all();
        $inventarioProductoTerminado = inventarioProductoTerminado::all();
        return view("Proyecto.Desarrollo.Ventas.FormVentas.modalDetallesdeProducto")->with('producto', $producto)->with('inventarioProductoTerminado', $inventarioProductoTerminado);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto2 = producto::find($id);
        return view("Proyecto.Desarrollo.Ventas.RegistrarVentas")->with('producto2', $producto2);
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
        
        $cantidadV=$request->cantidadV;
        $idV=$request->idV;
        $costoProdV=$request->costoProdV;
        $gananciaV=$request->gananciaV;
        $venta2 = venta::find($id);
        $venta2->estado_Ven = 0;
        $venta2->save();
        $detalles2 = detalleVenta::where('id_Venta',$id)->get();
        $docVenta = documentoVenta::where('id_Venta',$id)->get()->first();
        $doc = documento::find($docVenta->id_Documento);
        $doc->estado_Doc = 1;//estado anulada
        $doc->save();

        estadoDocumento::create([
            'motivo_EstadoDoc'=>$request->motivoEstado,
            'id_Documento'=>$docVenta->id_Documento,
        ]);        

        foreach ($detalles2 as $detalle2) {
            $inventario = inventarioProductoTerminado::where('id_Producto',$detalle2->id_Producto)->get()->last();
            inventarioProductoTerminado::create([
                'tipoMovimiento_IPT'=>1,
                'existencias_IPT'=>$inventario->nuevaExistencia_IPT,
                'cantidad_IPT'=>$detalle2->cant_DVen,
                'fechaMov_IPT'=>$request->fecha_Ven,
                'nuevaExistencia_IPT'=>$inventario->nuevaExistencia_IPT+$detalle2->cant_DVen,
                'id_Producto'=>$detalle2->id_Producto,
            ]);
        }

        $documento = documento::create([
            'tipo_Doc'=>$request->tipo_Doc,
            'tipoPago_Doc'=>2,
            'fechaEmision_Doc'=>$request->fecha_Ven,
            'estado_Doc'=>0,//estado normal
            'numero_Doc'=>$request->numeroDoc,
        ]);

        $contador=0;
        for ($i=0; $i < count($cantidadV); $i++) {
            $contador=$contador+$cantidadV[$i];
        }

        $venta = venta::create([
            'can_Ven'=>$contador,
            'fecha_Ven'=>$request->fecha_Ven,
            'total_Ven'=>$request->total_Ven,
            'id_Cliente'=>$request->clientes,
            'estado_Ven'=>1,
        ]);

        for ($i=0; $i < count($idV); $i++) {

            $inventario = inventarioProductoTerminado::where('id_Producto',$idV[$i])->get()->last();

            inventarioProductoTerminado::create([
                'tipoMovimiento_IPT'=>2,
                'existencias_IPT'=>$inventario->nuevaExistencia_IPT,
                'cantidad_IPT'=>$cantidadV[$i],
                'fechaMov_IPT'=>$request->fecha_Ven,
                'nuevaExistencia_IPT'=>$inventario->nuevaExistencia_IPT-$cantidadV[$i],
                'id_Producto'=>$idV[$i],
            ]);

            detalleVenta::create([
            'cant_DVen'=>$cantidadV[$i],
            'costoProd_DVen'=>$costoProdV[$i],
            'id_Venta'=>$venta->id,
            'id_Producto'=>$idV[$i],
            'gananciaProd_DVen'=>$gananciaV[$i],
            ]);# code...
        
        }

        $documentoVenta = documentoVenta::create([
            'id_Venta'=>$venta->id,
            'id_Documento'=>$documento->id,
        ]);
        
        return redirect("/ListadeVentas");
        // $cantidadV=$request->cantidadV;
        // $idV=$request->idV;
        // $costoProdV=$request->costoProdV;
        // $gananciaV=$request->gananciaV;
        // $cantidadV=$request->cantidadV;
        // $iddv=$request->id;

        // $venta = venta::find($id);
        // $contador=0;
        // for ($i=0; $i < count($cantidadV); $i++) {
        //     $contador=$contador+$cantidadV[$i];# code...
        // }
        // $venta -> total_Ven = $request -> total_Ven;
        // $venta -> id_Cliente = $request -> clientes;
        // $venta -> fecha_Ven = $request -> fecha_Ven;
        // $venta -> cantidad_Ven = $contador;
        // $venta -> save();

        // $detalles = detalleVenta::where('id_Venta',$id)->get();
        // foreach ($detalles as $detalle) {
        //     $detalle->delete();
        // }
        //    for ($i=0; $i < count($idV); $i++) {
        //     if ($iddv[$i]!="") {
        //         $detalle = new detalleVenta();
        //         $detalle->id=$iddv[$i];
        //         $detalle->cant_DVen=$cantidadV[$i];
        //         $detalle->costoProd_DVen=$costoProdV[$i];
        //         $detalle->id_Venta=$venta->id;
        //         $detalle->id_Producto=$idV[$i];
        //         $detalle->gananciaProd_DVen=$gananciaV[$i];
        //         $detalle->save();
        //     }else{
        //         detalleVenta::create([
        //         'cant_DVen'=>$cantidadV[$i],
        //         'costoProd_DVen'=>$costoProdV[$i],
        //         'id_Venta'=>$venta->id,
        //         'id_Producto'=>$idV[$i],
        //         'gananciaProd_DVen'=>$gananciaV[$i],
        //         ]);# code...
        //     }
        // }
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

    public static function responsables($id){
        $responsable = clienteJuridico::where('id_Cliente','=',$id)->get()->first();
        if (count($responsable)>0) {
            return $responsable;# code...
        }else{
            return "false";
        }

    }

    public static function motivoss($id){
        $docu = documentoVenta::where('id_Venta','=',$id)->get()->first();
        $xx = estadoDocumento::where('id_Documento','=',$docu->id_Documento)->get()->first();
        if (count($xx)>0) {
            return $xx;# code...
        }else{
            return "false";
        }

    }

    public static function motivos($id,$motivo){
        $docVenta = documentoVenta::where('id_Venta',$id)->get()->first();
        $doc = documento::find($docVenta->id_Documento);
        $doc->estado_Doc = 1;//estado anulada
        $doc->save();
        $venta3 = venta::find($id);
        $venta3->estado_Ven = 2;//Anulada-Eliminada
        $venta3->save();
       
        estadoDocumento::create([
            'motivo_EstadoDoc'=>$motivo,
            'id_Documento'=>$docVenta->id_Documento,
        ]);        

        $ventas = venta::with('cliente')->get();
        return 0;
    }
}
