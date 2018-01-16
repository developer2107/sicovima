<?php

namespace SICOVIMA\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Input;
use Image;
use SICOVIMA\producto;
use SICOVIMA\pedido;
use SICOVIMA\cliente;
use SICOVIMA\detallePedido;
use SICOVIMA\inventarioMateriaPrima;
use SICOVIMA\materiaPrima;
use Redirect;
use SICOVIMA\Http\Requests\PedidosRequest;

use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Entregar()
    {
        return view("Proyecto.Desarrollo.Pedidos.EntregarPedido");//
    }

    public function ListaaEntregar()
    {
      $pedido_f = pedido::with('cliente')->get();
      $cliente_f = cliente::all();
      $producto_f=\SICOVIMA\producto::all();
      $detallePedido_f=detallePedido::with('pedido','producto')->where('estado3', 1)->get();
      $responsable = \SICOVIMA\clienteJuridico::all();
        return view("Proyecto.Desarrollo.Pedidos.ListadePedidosaEntregar");
    }

    public function ListaaFinalizar()
    {
      $pedido_f = pedido::with('cliente')->get();
      $cliente_f = cliente::all();
      $producto_f=\SICOVIMA\producto::all();
      $detallePedido_f=detallePedido::with('pedido','producto')->where('estado3', 0)->get();

      $responsable = \SICOVIMA\clienteJuridico::all();
        return view("Proyecto.Desarrollo.Pedidos.ListadePedidosaFinalizar")->with('pedido_f', $pedido_f)->with('producto_f', $producto_f)->with('detallePedido_f', $detallePedido_f)->with('cliente_f', $cliente_f)->with('pedido_f', $pedido_f);
    }

    public function Modificar()
    {
         return view("Proyecto.Desarrollo.Pedidos.ModificarPedido");//
    }

    public function Mostrar()
    {
      $pedido = pedido::with('cliente')->get();
      $estadoPedido= \SICOVIMA\estadoPedido::all();
      $cliente = cliente::all();
      $producto=\SICOVIMA\producto::all();
      $detallePedido=detallePedido::all();

      $responsable = \SICOVIMA\clienteJuridico::all();
        return view("Proyecto.Desarrollo.Pedidos.MostrarListadePedidos")->with('pedido', $pedido)->with('estadoPedido', $estadoPedido);//
    }

    public function Registrar()
    {
      $cliente = cliente::orderBy('id','ASC')->paginate();
        return view("Proyecto.Desarrollo.Pedidos.RegistrarPedido")->with('cliente', $cliente);//
    }

    public function Iniciar($id)
    {
      $id_pedidos= pedidos::find($id);
      dd($id_pedido);
        return Redirect::to('/IniciarPedido',compact('id_pedidos'));//
    }

     public function ListaSinIniciar()
    {

      $pedido = pedido::with('cliente')->get();
      $cliente = cliente::all();
      $producto=\SICOVIMA\producto::all();
      $detallePedido=detallePedido::with('pedido','producto')->where('estado', 0)->get();

      $responsable = \SICOVIMA\clienteJuridico::all();

        return view('Proyecto.Desarrollo.Pedidos.ListadePedidosSinIniciar')->with('pedido', $pedido)->with('producto', $producto)->with('detallePedido', $detallePedido)->with('cliente', $cliente)->with('pedido', $pedido);
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {

       $pedido = pedido::with('cliente')->get();
       $cliente = cliente::all();
       $producto=\SICOVIMA\producto::all();
       $responsable = \SICOVIMA\clienteJuridico::all();
       $detallePedido=detallePedido::with('pedido','producto')->get();

       if ($detallePedido->estado3 == 0 && $detallePedido->estado == 0) {
         return view('Proyecto.Desarrollo.Pedidos.ListadePedidosSinIniciar')->with('pedido', $pedido)->with('producto', $producto)->with('detallePedido', $detallePedido)->with('cliente', $cliente)->with('pedido', $pedido);

       }else if ($detallePedido->estado3 == 0 && $detallePedido->estado == 0) {
         return view("Proyecto.Desarrollo.Pedidos.ListadePedidosaFinalizar")->with('pedido_f', $pedido_f)->with('producto_f', $producto_f)->with('detallePedido_f', $detallePedido_f)->with('cliente_f', $cliente_f)->with('pedido_f', $pedido_f);
       }else {
         return view("Proyecto.Desarrollo.Pedidos.MostrarListadePedidos")->with('pedido', $pedido)->with('estadoPedido', $estadoPedido);//

       }

     }

    public function create()
    {

        $cliente = cliente::orderBy('id','ASC')->paginate();
        return view('Proyecto.Desarrollo.pedidos.create')->with('cliente',$cliente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedidosRequest $request)// PedidosRequest, con comando genere este request para asi validar los datos dentro de
    // ahi, se valida cuantos caracteres tendra, si sera unico, si se puede dajr vacio etc. investigar del comando request y ver video param
    // comprender.....
    {

      // dd($request->all());


      $contador=count($request['tipop']);
      $contador1=count($request['cantidad_DPed']);
      $tipo_Prod=$request['tipop'];
      $estilo_Prod=$request['estilop'];
      $descripcion_Prod=$request['descripcionp'];
      $precio_Prod=$request['preciop'];
      $color_Prod=$request['colorp'];
      $talla_Prod=$request['tallap'];
      $cantidad_DPed=$request['cantidadp'];
      $subtotal_DPed=$request['subtotalp'];
      $subtotalVenta_DPed=$request['subtotalventap'];
      $id_cliente=$request['clienteRegPed'];
      $codImagen = $request['files'];
      $total_Ped = $request['total_Ped'];

      //recore los valores que tiene la tabla para guardarlos
          for($a=0;$a<$contador;$a++){
            //metodo guardar producto, al principio del controlador se declara el namaspace
  producto::create([
            'tipo_Prod'=>$tipo_Prod[$a],
            'estilo_Prod'=>$estilo_Prod[$a],
            'descripcion_Prod'=>$descripcion_Prod[$a],
            'precio_Prod'=>$precio_Prod[$a],
            'color_Prod'=>$color_Prod[$a],
            'talla_Prod'=>$talla_Prod[$a],
            'imagen_Prod'=>$codImagen[$a],
            'estado_Prod' => 0,//estado en pedido, 1= estado de producto ya no es pedido
            'estado2_Prod' => 0,//matener en cero, defectuoso es 1
            'estado3_Prod' => 0,// 0 si esta en iniciar pedido, 1 si esta en finalizar, a la hora de listar en la tabla
        ]);
      }



      //guardar pedido
    $ped = pedido::create([
        'fecha_Ped'=>$request['fecha_Ped'],
        'total_Ped'=>$request['total_Ped'],
        'anticipo_Ped'=>$request['anticipo_Ped'],
        'fechaRecibir_Ped'=>$request['fechaRecibir_Ped'],
        'fechaEntregar_Ped'=>$request['fechaEntregar_Ped'],
        'id_Cliente'=>$request['clientes'],
      ]);

      // $aux = cliente::find($ped->id_Cliente);
      // bitacora::bitacoras('Registro','Registro de pedido'.$ped->id.' al cliente: '.$aux->nombre_Cli);
      $producto=producto::all();
      $id_producto=$producto->last()->id;
      $pedido=pedido::all();
      $id_pedido=$pedido->last()->id;

      $cont = count($subtotal_DPed);//variable unica de la tabla y asi hacer los recorridos necesarios para guardar informacion, el
      //metodo count es para sacar cuantos registros existen y asi recorrer el for
      //al tener variables ingresadas atraves del modal que se guardaron en array recorre para guardar
      for ($i=0; $i <$cont ; $i++) {
        # code..
      detallePedido::create([
        'cantidad_DPed'=>$cantidad_DPed[$i],
        'subtotal_DPed'=>$subtotal_DPed[$i],
        'subtotalVenta_DPed'=>$subtotalVenta_DPed[$i],
        'estado' => 0, //estado que mantiene 0= inicar, 1= finalizar
        'id_Producto'=>$id_producto,
        'id_Pedido'=>$id_pedido,
      ]);
    }

    return redirect()->route('Pedidos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $materiaPrima = materiaPrima::where('estado_MP','=', False )->get(['id','nombre_MP']);
      $detallePedido_e=detallePedido::find($id);
      $inventarioMateriaPrima_e=inventarioMateriaPrima::orderBy('id_MateriaPrima', 'ASC')->where('tipoMovimiento_IMP', 1)->where('nuevaExistencia_IMP','>=',1)->get(['id','tipoMovimiento_IMP', 'existencias_IMP', 'cantidad_IMP','fechaMov_IMP','nuevaExistencia_IMP', 'id_MateriaPrima']);
      $prueb = inventarioMateriaPrima::all();
      $prueb2 = materiaPrima::all();


      if ($detallePedido_e->estado == true && $detallePedido_e->producto->estado == 0) {
        # code...
        return view("Proyecto.Desarrollo.Pedidos.FinalizarPedido")->with('materiaPrima', $materiaPrima)->with('detallePedido_e', $detallePedido_e)->with('inventarioMateriaPrima_e', $inventarioMateriaPrima_e);;

      }else if($detallePedido_e->producto->estado == 0 && $detallePedido_e->estado == true){

        return view('Proyecto.Desarrollo.Pedidos.IniciarPedido')->with('materiaPrima', $materiaPrima)->with('detallePedido_e', $detallePedido_e)->with('inventarioMateriaPrima_e', $inventarioMateriaPrima_e);

      }else {
        return view("Proyecto.Desarrollo.Pedidos.EntregarPedido")->with('materiaPrima', $materiaPrima)->with('detallePedido_e', $detallePedido_e)->with('inventarioMateriaPrima_e', $inventarioMateriaPrima_e);;
      }

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
      if ($request['estado'] === 'TRUE') {
        # code...
          $detallePedido_U = detallePedido::find($id);
          $detallePedido_U->estado = $request->estado;
          $detallePedido_U->save();
      }else if($request->condicion == 'True'){

        $defectuosoPT = new \SICOVIMA\defectuosoPT;
        $defectuosoPT->cantidad_DPT = $request->cant_DPT;
        $defectuosoPT->descripcion_DPT= $request->motivo;
        $defectuosoPT->id_Producto= $id;
        $defectuosoPT->descuento_DPT= $request->descuento_DPT;


      $producto = producto::find($request->id);
      $producto->estado_Prod = 1;
      $producto->estado2_Prod = 1;
      $producto->estado3_Prod = 1;
      $producto->save();

      $detallePedido = detallePedido::find($id);
      $detallePedido->estado = 1;
      $defectuosoPT->save();
      $producto->save();
      $detallePedido->save();


    }else {
      $producto = producto::find($request->id);
      $producto->estado_Prod = 1;
      $producto->estado2_Prod = 1;
      $producto->estado3_Prod = 1;
      $producto->save();

      $detallePedido = detallePedido::find($id);
      $detallePedido->estado = 1;
      $detallePedido->save();
    }

      return redirect()->route('Pedidos.index');

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
}
