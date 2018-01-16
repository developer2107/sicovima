<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use SICOVIMA\proveedor;
use SICOVIMA\materiaPrima;
use SICOVIMA\compra;
use Session;
use SICOVIMA\detalleCompra;
use Redirect;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\User;
use SICOVIMA\bitacora;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Modificar($id)
    {
      $compra = compra::find($id);
      $materiaPrimas = \SICOVIMA\materiaPrima::all();

        return view("Proyecto.Desarrollo.Compras.ModificarCompra",compact('compra','materiaPrimas'));
    }

    public function Ver($id)
    {
      $compra = compra::find($id);
      $proveedor = proveedor::find($compra->id_Proveedor);

      $inventarioMateriaPrima = \SICOVIMA\inventarioMateriaPrima::all();
      return view('Proyecto.Desarrollo.Compras.VerCompra',compact('inventarioMateriaPrima','compra','proveedor'));
    }

    public function Registrar()
    {
        return view("Proyecto.Desarrollo.Compras.RegistrarCompras");//
    }

    public function Mostrar()
    {
      $compra = compra::with('proveedor')->orderBy('fecha_Com')->get();

      $materiaPrima=\SICOVIMA\materiaPrima::all();
      $detalleCompra=detalleCompra::all();

      return view("Proyecto.Desarrollo.Compras.MostrarListadeCompras")->with('compra', $compra);
   }

    public function Index()
    {
        $proveedores = proveedor::all();
        $materiaPrimas = \SICOVIMA\materiaPrima::all();

        return view('Proyecto.Desarrollo.Compras.RegistrarCompras',compact('proveedores','materiaPrimas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $cantidad = $request['cantidadc'];
      $id_MP = $request['idc'];
      $subTotal = $request['subTotalc'];

      $contador = count($request['cantidadc']);

     $compra =  \SICOVIMA\compra::create([
       'numFac_Com'=>$request['numFac_Com'],
       'fecha_Com'=>$request['fecha_Com'],
       'total_Com'=>$request['total_Com'],
       'id_Proveedor'=>$request['nombre_Prov'],
     ]);

      $aux = proveedor::find($compra->id_Proveedor);
      bitacora::bitacoras('Registro','Registro de compra '.$compra->id.' a proveedor: '.$aux->nombre_Prov);

       for ($j=0; $j < $contador ; $j++) {
         \SICOVIMA\detalleCompra::create([
          'cant_DCom'=>$cantidad[$j],
          'subtotal_DCom'=>$subTotal[$j],
          'id_Compra'=>$compra -> id,
          'id_MateriaPrima'=>$id_MP[$j],
         ]);

         $inventario = \SICOVIMA\inventarioMateriaPrima::where('id_MateriaPrima',$id_MP[$j])->get()->last();
         if (count($inventario) > 0) {
          $existencias_IMP = $inventario -> nuevaExistencia_IMP;
         } else {
          $existencias_IMP = 0;
         }

         \SICOVIMA\inventarioMateriaPrima::create([
           'tipoMovimiento_IMP'=>1,
           'existencias_IMP'=>$existencias_IMP,
           'cantidad_IMP'=>$cantidad[$j],
           'fechaMov_IMP'=>$request['fecha_Com'],
           'nuevaExistencia_IMP'=>$existencias_IMP + $cantidad[$j],
           'id_MateriaPrima'=>$id_MP[$j],
         ]);
       }

       Session::flash('message','Compra registrada correctamente');
       $proveedores = proveedor::all();
       $materiaPrimas = \SICOVIMA\materiaPrima::all();

       return view('Proyecto.Desarrollo.Compras.RegistrarCompras',compact('proveedores','materiaPrimas'));
       //return redirect("Proyecto.Desarrollo.Compras.RegistrarCompras")->with('mensaje','¡Guardado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Proyecto.Desarrollo.Compras.VerCompra');
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
        $compraM = compra::find($id);
        $detallesCompra = detalleCompra::where('id_Compra',$id)->get();

        foreach ($detallesCompra as $detCompra) {
          $inventario = \SICOVIMA\inventarioMateriaPrima::where('id_MateriaPrima',$detCompra-> id_MateriaPrima)->get()->last();

          \SICOVIMA\inventarioMateriaPrima::create([
            'tipoMovimiento_IMP'=>2,
            'existencias_IMP'=>$inventario-> nuevaExistencia_IMP,
            'cantidad_IMP'=>$detCompra-> cant_DCom,
            'fechaMov_IMP'=>$request['fecha_Com'],
            'nuevaExistencia_IMP'=>$inventario -> nuevaExistencia_IMP - $detCompra-> cant_DCom,
            'id_MateriaPrima'=>$detCompra-> id_MateriaPrima,
          ]);

          $detCompra -> delete();

        }
        $compraM->delete();

        $cantidad = $request['cantidadc'];
        $id_MP = $request['idc'];
        $subTotal = $request['subTotalc'];

        $contador = count($request['cantidadc']);

       $compra =  \SICOVIMA\compra::create([
         'numFac_Com'=>$request['numFac_Com'],
         'fecha_Com'=>$request['fecha_Com'],
         'total_Com'=>$request['total_Com'],
         'id_Proveedor'=>$request['nombre_Prov'],
       ]);

      $aux = proveedor::find($compra->id_Proveedor);
      bitacora::bitacoras('Modificación','Modificación de compra '.$compra->id.' a proveedor: '.$aux->nombre_Prov);

         for ($j=0; $j < $contador ; $j++) {
           \SICOVIMA\detalleCompra::create([
            'cant_DCom'=>$cantidad[$j],
            'subtotal_DCom'=>$subTotal[$j],
            'id_Compra'=>$compra -> id,
            'id_MateriaPrima'=>$id_MP[$j],
           ]);

           $inventario = \SICOVIMA\inventarioMateriaPrima::where('id_MateriaPrima',$id_MP[$j])->get()->last();
           if (count($inventario) > 0) {
            $existencias_IMP = $inventario -> nuevaExistencia_IMP;
           } else {
            $existencias_IMP = 0;
           }

           \SICOVIMA\inventarioMateriaPrima::create([
             'tipoMovimiento_IMP'=>1,
             'existencias_IMP'=>$existencias_IMP,
             'cantidad_IMP'=>$cantidad[$j],
             'fechaMov_IMP'=>$request['fecha_Com'],
             'nuevaExistencia_IMP'=>$existencias_IMP + $cantidad[$j],
             'id_MateriaPrima'=>$id_MP[$j],
           ]);
         }

         Session::flash('message','Compra modificada correctamente');

         $compra = compra::with('proveedor')->get();

         return redirect('/ListadeCompras')->with('compra',$compra);
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compra = compra::find($id);
        $eliminarCompra = detalleCompra::where('id_Compra',$id)->get();
        foreach ($eliminarCompra as $e) {
          $inventario = \SICOVIMA\inventarioMateriaPrima::where('id_MateriaPrima',$e-> id_MateriaPrima)->get()->last();

          \SICOVIMA\inventarioMateriaPrima::create([
            'tipoMovimiento_IMP'=>2,
            'existencias_IMP'=>$inventario-> nuevaExistencia_IMP,
            'cantidad_IMP'=>$e-> cant_DCom,
            'fechaMov_IMP'=>$compra-> fecha_Com,
            'nuevaExistencia_IMP'=>$inventario -> nuevaExistencia_IMP - $e-> cant_DCom,
            'id_MateriaPrima'=>$e-> id_MateriaPrima,
          ]);

          $e->delete();
        
        }
        Compra::destroy($id);
        
        $aux = proveedor::find($compra->id_Proveedor);
        bitacora::bitacoras('Eliminacion','Eliminacion de la compra '.$compra->id.' a proveedor: '.$aux->nombre_Prov);

        Session::flash('message','Compra eliminada correctamente');
        $compra = compra::with('proveedor')->get();
         return redirect('/ListadeCompras')->with('compra',$compra);
    }

    public function Reportes()
    {
        $compras = compra::with('proveedor')->get();
        return view("Proyecto.Desarrollo.Compras.ReportesCompra",compact('compras'))->with('compras', $compras);
    }

    public function ReporteporProv()
    {
        $compras = compra::with('proveedor')->get();
        return view("Proyecto.Desarrollo.Compras.compras",compact('compras'))->with('compras', $compras);
    }

}
