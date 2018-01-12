<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\departamento;
use SICOVIMA\municipio;
use SICOVIMA\cliente;
use SICOVIMA\clienteJuridico;
use SICOVIMA\clienteNatural;
use SICOVIMA\correoCliente;
use SICOVIMA\telefonoCliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$departamentos = departamento::lists('nombre_Depa');
        $departamento = departamento::all();
        $municipio = municipio::all();

        return view('Proyecto.Desarrollo.Cliente.RegistroCliente',compact('departamento','municipio'))->with('departamento', $departamento)->with('municipio', $municipio);
    }
    
    public function Mostrar()
    {
      $cliente = cliente::all();

      return view("Proyecto.Desarrollo.Cliente.MostrarListaCli")->with('cliente', $cliente);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("Proyecto.Desarrollo.Cliente.MostrarListaCli");
    }

    public function Ver($id)
    {
        $cliente = cliente::find($id);
        return view("Proyecto.Desarrollo.Cliente.VerCliente",compact('cliente'));
    }

    public function ModificarCli()
    {
      return view("Proyecto.Desarrollo.Cliente.ModificarCli");
    }

    public function darbajacli()
    {
      return view("Proyecto.Desarrollo.Cliente.DarBajaCli");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tel=$request->tel;
        $cor=$request->cor;
        $tipo=$request->tipoCliente;

        $cliente = cliente::create([
            'nombre_Cli'=>$request->nombreCliente,
            'tipo_Cli'=>$request->tipoCliente,//0--->natural   1--->juridico
            'estado_Cli'=>1,//true---> activo
            'direccion_Cli'=>$request->direccionCliente,
            'id_Municipio'=>$request->municipios,
        ]);

        if ($tipo == 0) {
           $clienteNatural = clienteNatural::create([
            'DUI_CN'=>$request->duiCliente,
            'id_Cliente'=>$cliente->id,
        ]); # code...

            //bitacora::bitacoras('Registro','Registro de cliente natural'.$clienteNatural->id.': '.$cliente->nombre_Cli);
        
        }else{
            if ($tipo==1) {
                $clienteJuridico = clienteJuridico::create([
                    'NIT_CJ'=>$request->nitCliente,
                    'nombreResponsable_CJ'=>$request->nombreResponsable,
                    'id_Cliente'=>$cliente->id,
                    'RNC_CJ'=>$request->rncCliente,
                ]);

                //bitacora::bitacoras('Registro','Registro de cliente juridico '.$clienteJuridico->id.': '.$cliente->nombre_Cli);

            }else{
                echo "No existe";
            }
        }

        for ($i=0; $i < count($tel); $i++) {
            telefonoCliente::create([
            'numero_TelefonoCli'=>$tel[$i],
            'id_Cliente'=>$cliente->id,
        ]);
        }

        for ($i=0; $i < count($cor); $i++) {
            correoCliente::create([
            'correo_CorreoCli'=>$cor[$i],
            'id_Cliente'=>$cliente->id,
        ]);
        }

        return redirect("/RegistroCliente");//
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
    public function municipios($id){
        $municipio = municipio::where('id_Departamento','=',$id)->get();
        if (count($municipio)>0) {
            return $municipio;# code...
        }else{
            return "false";
        }

    }

    public static function dui($id){
        $dui = clienteNatural::where('id_Cliente','=',$id)->get()->first();
        if (count($dui)>0) {
            return $dui->DUI_CN;
        }else{
            return "";
        }

    }

    public static function nit($id){
        $nit = clienteJuridico::where('id_Cliente','=',$id)->get()->first();
        if (count($nit)>0) {
            return $nit->NIT_CJ;
        }else{
            return "";
        }

    }

    public static function nombreR($id){
        $nombreR = clienteJuridico::where('id_Cliente','=',$id)->get()->first();
        if (count($nombreR)>0) {
            return $nombreR->nombreResponsable_CJ;
        }else{
            return "";
        }

    }

    public static function rnc($id){
        $rnc = clienteJuridico::where('id_Cliente','=',$id)->get()->first();
        if (count($rnc)>0) {
            return $rnc->RNC_CJ;
        }else{
            return "";
        }

    }
}
