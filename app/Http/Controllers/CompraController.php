<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use SICOVIMA\proveedor;
use SICOVIMA\materiaPrima;
use SICOVIMA\compra;
use SICOVIMA\detalleCompra;
use Redirect;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;

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
        return view("Proyecto.Desarrollo.Compras.ModificarCompra",compact('compra'));//
    }

    public function Ver()
    {
        return view("Proyecto.Desarrollo.Compras.VerCompra");
    }

    public function Registrar()
    {
        return view("Proyecto.Desarrollo.Compras.RegistrarCompras");//
    }

    public function Mostrar()
    {
      $compra = compra::with('proveedor')->get();

      $materiaPrima=\SICOVIMA\materiaPrima::all();
      $detalleCompra=detalleCompra::all();

      return view("Proyecto.Desarrollo.Compras.MostrarListadeCompras")->with('compra', $compra);//
   }

    public function Index()
    {
        $proveedores = proveedor::all();
      
        return view('Proyecto.Desarrollo.Compras.RegistrarCompras',compact('proveedores'))->with('proveedores', $proveedores);
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
      $tipo = $request['tipoc'];
      $medida = $request['medidac'];
      $color = $request['colorc'];
      $nombre = $request['nombrec'];
      $subTotal = $request['subTotalc'];
      $total = $request['total'];
      $sumac = $request['suma1'];

      $contador = count($request['cantidadc']);
      for ($i=0; $i < $contador ; $i++) {
        \SICOVIMA\materiaPrima::create([
         'nombre_MP'=>$nombre[$i],
         'tipo_MP'=>$tipo[$i],
         'color_MP'=>$color[$i],
         'precio_MP'=>$subTotal[$i],
         'unidadMedida_MP'=>$medida[$i],

        ]);
      }

      \SICOVIMA\compra::create([
       'numFac_Com'=>$request['numFac_Com'],
       'fecha_Com'=>$request['fecha_Com'],
       'total_Com'=>$request['total_Com'],
       'id_Proveedor'=>$request['nombre_Prov'],
     ]);

       $contador1 = count($request['cantidadc']);
       $compra = \SICOVIMA\compra::all();
       $id_Compra = $compra->last()->id;

       $materiaPrima = \SICOVIMA\materiaPrima::all();
       $id_materiaPrima = $materiaPrima->last()->id;
       for ($j=0; $j < $contador1 ; $j++) {
         \SICOVIMA\detalleCompra::create([
          'cant_DCom'=>$cantidad[$j],
          'subtotal_DCom'=>$total[$j],
          'id_Compra'=>$id_Compra,
          'id_MateriaPrima'=>$id_materiaPrima,

         ]);
       }

       //return redirect("Proyecto.Desarrollo.Compras.RegistrarCompras")->with('mensaje','¡Guardado!');
       return view("Proyecto.Desarrollo.Compras.RegistrarCompras");
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
        Compra::destroy($id);
        Session::flash('message','Detalle eliminado correctamente');
        return view("Proyecto.Desarrollo.Compras.RegistrarCompras");
    }
}
