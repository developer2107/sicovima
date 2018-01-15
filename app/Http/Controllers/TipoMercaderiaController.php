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
    public function index(Request $request)
    {
      if($request->estado==""){
        $estado=1;
      }else{
        $estado=$request->estado;
      }
      $tipos=TipoMercaderia::orderBy('nombre_TM')->get();
        return view('Proyecto.Desarrollo.TipoMercaderia.verLista',compact('tipos','estado'));
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
            // 'estado_TM'=>1,
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
    // public function cambio($id)
    // {
    //     $tipo=TipoMercaderia::find($id);
    //     if($tipo->estado_TM){
    //       $tipo->estado_TM=0;
    //       $estado=1;
    //       Session::flash('message','Registro inactivo');
    //     }
    //       else{
    //         $tipo->estado_TM=1;
    //         $estado=0;
    //         Session::flash('message','Registro activo');
    //       }
    //       $tipo->save();
    //     return redirect('/TipoMercaderia?estado='.$estado);
    // }

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
      $tipo=TipoMercaderia::find($id);
      // if($tipo->estado_TM){
      //   $estado=1;
      // }else{
      //   $estado=0;
      // }
      $message="Registro eliminado";
      $error="No puede eliminarse";
        try{
          TipoMercaderia::destroy($id);
          return redirect('/TipoMercaderia?estado='.$estado)->with('message','Registro eliminado');
        }
        catch (\Exception $e) {
          //si entra aqui es por que no se borra, tiene llave foranea
        }
        return redirect('/TipoMercaderia?estado='.$estado)->with('error','No puede eliminarse');

    }

}
