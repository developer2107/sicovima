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

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Anular()
    {
        return view("Proyecto.Desarrollo.Ventas.AnularVenta");
    }

    public function Modificar($id)
    {
        //echo $venta = venta::where('id',$id)->get()->first();
        $venta = venta::find($id);
        $clientes = cliente::all();
        $cliente = cliente::all();
        $productos = producto::all();
        
        $arrayC = [];
        foreach ($clientes as $cliente) {
            $arrayC[$cliente->id]=$cliente->nombre_Cli;
        }

        $inventarioProductoTerminados = inventarioProductoTerminado::all();
        return view('Proyecto.Desarrollo.Ventas.ModificarVenta',compact('arrayC','inventarioProductoTerminados','venta','productos','cliente','clientes'));
    }

    public function Registrar()
    {
        return view("Proyecto.Desarrollo.Ventas.RegistrarVentas");
    }

    public function Ver()
    {
        return view("Proyecto.Desarrollo.Ventas.VerVenta");
    }

    public function Mostrar()
    {
        return view("Proyecto.Desarrollo.Ventas.MostrarListadeVentas");//
    }

    public function Index()
    {
        // $producto = producto::create([
        //     'tipo_Prod'=>"Short",
        //     'estilo_Prod'=>"Comando",
        //     'descripcion_Prod'=>"Con pretina ancha",
        //     'precio_Prod'=>14.22,
        //     'color_Prod'=>"Negro",
        //     'talla_Prod'=>"36",
        //     'imagen_Prod'=>'9878674653',
        // ]);

        //$nombres_Cli = cliente::select('nombre_Cli') -> get();
       // dd($nombres_Cli -> all());
       // 
       
        $productos = producto::all();
        $cliente = cliente::all();
        $inventarioProductoTerminados = inventarioProductoTerminado::all();
      
        return view('Proyecto.Desarrollo.Ventas.RegistrarVentas',compact('cliente'))->with('productos')->with('cliente', $cliente)->with('inventarioProductoTerminados', $inventarioProductoTerminados);

        
            //return view('Proyecto.Desarrollo.Ventas.RegistrarVentas',compact('nombres_Cli'));
        /*/if(is_null($request->has('total_Ven'))) {
           # code...
           $id= \SICOVIMA\venta::create([
            'can_Ven'=>'5',
            'fecha_Ven'=>'2017-09-08',
            'total_Ven'=>'1',
            'id_Cliente'=>'1',

            ]);
       //}
        $Cliente = \SICOVIMA\cliente::orderBy('id','ASC')->paginate(5);
        $Venta = \SICOVIMA\venta::orderBy('id','ASC')->paginate(5);
        $Producto = \SICOVIMA\producto::orderBy('id','ASC')->paginate(5);
       // return view('Ventas.RegistrarVentas',compact('nombres_Cli'));
        //return view("Proyecto.Desarrollo.Ventas.RegistrarVentas")->with('cliente', $nombres_Cli)->with('cliente', $Cliente)->with('venta', $Venta)->with('producto', $Producto);
    */
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

        return view("Proyecto.Desarrollo.Ventas.FormVentas.modalDetallesdeProducto")->with('producto', $producto)->with('inventarioProductoTerminado', $inventarioProductoTerminado);//
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
            'estado_Doc'=>0,
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
}
