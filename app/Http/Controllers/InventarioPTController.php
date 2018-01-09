<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use SICOVIMA\producto;
use SICOVIMA\inventarioProductoTerminado;

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

    public function Ver()
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
       
        return view("Proyecto.Desarrollo.InventarioPT.VerInventarioPT",compact('arrayC','inventarioProductoTerminados','venta','productos','cliente','clientes'));
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
}
