<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use SICOVIMA\producto;
use SICOVIMA\pedido;
use SICOVIMA\cliente;
use SICOVIMA\detallePedido;
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

    public function Finalizar()
    {
        return view("Proyecto.Desarrollo.Pedidos.FinalizarPedido");//
    }

    public function ListaaEntregar()
    {
        return view("Proyecto.Desarrollo.Pedidos.ListadePedidosaEntregar");//
    }

    public function ListaaFinalizar()
    {
        return view("Proyecto.Desarrollo.Pedidos.ListadePedidosaFinalizar");//
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
        return view("Proyecto.Desarrollo.Pedidos.RegistrarPedido");//
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
      $detallePedido=detallePedido::with('pedido','producto')->get();

      $responsable = \SICOVIMA\clienteJuridico::all();

        return view('Proyecto.Desarrollo.Pedidos.ListadePedidosSinIniciar')->with('pedido', $pedido)->with('producto', $producto)->with('detallePedido', $detallePedido)->with('cliente', $cliente)->with('pedido', $pedido);
      }


    public function Ver()
    {
        return view("Proyecto.Desarrollo.Pedidos.VerPedido");//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
       $cliente = cliente::all();
       $producto = \SICOVIMA\producto::orderBy('id','ASC')->paginate(5);
       return view('Proyecto.Desarrollo.pedidos.create')->with('producto', $producto)->with('cliente',$cliente);
     }

    public function create()
    {
        return view('Proyecto.Desarrollo.pedidos.create');
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

      dd($request->all());

      $contador=count($request['tipop']);
      $contador1=count($request['cantidad_DPed']);
      $tipo_Prod=$request['tipop'];
      $estilo_Prod=$request['estilop'];
      $descripcion_Prod=$request['descripcionp'];
      $precio_Prod=$request['preciop'];
      $color_Prod=$request['colorp'];
      $talla_Prod=$request['tallap'];
      $imagen_Prod='987272';
      $cantidad_DPed=$request['cantidadp'];
      $subtotal_DPed=$request['subtotalp'];
      $subtotalVenta_DPed=$request['subtotalventap'];
      $id_cliente=$request['clienteRegPed'];



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
            'imagen_Prod'=>$imagen_Prod,
        ]);
      }


      //guardar pedido
    pedido::create([
        'fecha_Ped'=>$request['fecha_Ped'],
        'total_Ped'=>$request['total_Ped'],
        'anticipo_Ped'=>$request['anticipo_Ped'],
        'fechaRecibir_Ped'=>$request['fechaRecibir_Ped'],
        'fechaEntregar_Ped'=>$request['fechaEntregar_Ped'],
        'id_Cliente'=>$request['clienteRegPed'],
      ]);

      //dd($p->all());

      $producto=producto::all();
      $id_producto=$producto->last()->id;
      $pedido=pedido::all();
      $id_pedido=$pedido->last()->id;

      $cont = count($subtotal_DPed);//variable unica de la tabla y asi hacer los recorridos necesarios para guardar informacion, el
      //metodo count es para sacar cuantos registros existen y asi recorrer el for

      //dd($id_cliente);

      //al tener variables ingresadas atraves del modal que se guardaron en array recorre para guardar
      for ($i=0; $i <$cont ; $i++) {
        # code..
      detallePedido::create([
        'cantidad_DPed'=>$cantidad_DPed[$i],
        'subtotal_DPed'=>$subtotal_DPed[$i],
        'subtotalVenta_DPed'=>$subtotalVenta_DPed[$i],
        'id_Producto'=>$id_producto,
        'id_Pedido'=>$id_pedido,
      ]);
            }

            return view('Proyecto.Desarrollo.Pedidos.RegistrarPedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $detallePedido=detallePedido::find($id)->with('producto', 'pedido')->get();
      $detalleProducto=\SICOVIMA\detalleProducto::find($id)->with('producto','inventarioMateriaPrima')->get();
      $inventarioMateriaPrima=\SICOVIMA\inventarioMateriaPrima::find($id)->with('materiaPrima')->get();

        return view('Proyecto.Desarrollo.pedidos.IniciarPedido')->with('detallePedido', $detallePedido)->with('detalleProducto', $detalleProducto)->with('inventarioMateriaPrima', $inventarioMateriaPrima);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Proyecto.Desarrollo.pedidos.IniciarPedido');
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
}
