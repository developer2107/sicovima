<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use SICOVIMA\TipoMercaderia;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use Session;

class TipoMercaderiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipos=TipoMercaderia::where('estado_TM',1)->orderBy('nombre_TM')->get();
        return view('Proyecto.Desarrollo.TipoMercaderia.verLista',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->nombre_TM!=""){
      $aux=TipoMercaderia::where('nombre_TM',$request->nombre_TM)->get()->first();
      if($request->idTipo==""){
        if(count($aux)==0){
          TipoMercaderia::create([
            'nombre_TM'=>$request->nombre_TM,
            'estado_TM'=>1,
          ]);
          Session::flash('message','Registro guardado');
        }else{
          Session::flash('error','El registro ya existe');
        }
      }else{
        if(count($aux)==0 || $aux->id==$request->idTipo){
        $tipo=TipoMercaderia::find($request->idTipo);
        $tipo->nombre_TM=$request->nombre_TM;
        $tipo->save();
        Session::flash('message','Registro modificado');
      }else{
        Session::flash('error','El registro ya existe');
      }
    }}else{
        Session::flash('error','Error al llenar el campo');
    }
      return redirect('/TipoMercaderia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cambio($id)
    {
        $tipo=TipoMercaderia::find($id);
        if($tipo->estado_TM){
          $tipo->estado_TM=0;
        }
          else{
            $tipo->estado_TM=1;
          }
          $tipo->save();
          Session::flash('message','Registro inactivo');
          return redirect('/TipoMercaderia');
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
    public function eliminar($id)
    {
        try{
          TipoMercaderia::destroy($id);
          Session::flash('message','Registro eliminado');}
        catch (Exception $e) {
          Session::flash('error','No se pudo eliminar el registro');
        }
        return redirect('/TipoMercaderia');

    }

}
