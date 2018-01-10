<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use SICOVIMA\materiaPrima;
use SICOVIMA\compra;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;

class InventarioMPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Listar()
    {
        return view("Proyecto.Desarrollo.InventarioMP.InventarioMP");
    }

    public function Ver($id)
    {

        $materiaPrima = materiaPrima::find($id);
        $compra = compra::get();

        return view('Proyecto.Desarrollo.InventarioMP.VerInventarioMP',compact('materiaPrima','compra'));
    }

    public function Mostrar()
    {
      $materiaPrima = materiaPrima::all();

      return view("Proyecto.Desarrollo.InventarioMP.InventarioMP")->with('materiaPrima', $materiaPrima);//
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
        return view("Proyecto.Desarrollo.InventarioMP.InventarioMP");
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
