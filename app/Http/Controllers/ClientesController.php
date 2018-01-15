<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;

use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\departamento;
use SICOVIMA\municipio;
use SICOVIMA\cliente;
use Mail;
use DB;
use SICOVIMA\User;
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

      $cliente = cliente::orderby('nombre_Cli')->where('estado_Cli',1)->get();

      return view("Proyecto.Desarrollo.Cliente.MostrarListaCli")->with('cliente', $cliente);
   }

   public function MostrarCI()
   {
      $cliente = cliente::orderby('nombre_Cli')->where('estado_Cli',0)->get();
      return view("Proyecto.Desarrollo.Cliente.DarBajaCli")->with('cliente', $cliente);
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

    public function Modificar($id)
    {
        $cliente = cliente::find($id);
        $departamento = departamento::all();
        $municipio = municipio::all();
        return view("Proyecto.Desarrollo.Cliente.ModificarCli",compact('cliente','departamento','municipio'));
    }

    // public function Correo(Request $request)
    // {
    //     Mail::raw("Este es un mensaje",function($msj) use ($request){
    //         $msj->subject('Este es un mensaje');
    //         $msj->to('ingridayala_94@hotmail.com');
    //     });
    // }

    public function correo(Request $request){
        $usuario= User::where('email',$request['email'])->get()->first();

        if(count($usuario)==1){
          $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        for($i=0;$i<12;$i++)
        {
            $cad .= substr($str,rand(0,62),1);
        }

      DB::beginTransaction();
       DB::table('users')
            ->where('email',$request['email'])
            ->update([
            'password'=>bcrypt($cad),
            ]);

        $mensaje='Su usuario es: '.$usuario->name.' Su contraseña es :'.$cad;

        try {
        Mail::raw($mensaje,function($msj) use ($request){
            $msj->subject('Nueva contraseña en SICOVIMA');
             try {
            $msj->to($request['email']);
          } catch (\Swift_RfcComplianceException $e) {
            DB::rollback();
            return redirect('/login')->with('error','Lo sentimos el correo no pudo ser enviado');
          }
        });
      }catch (\Swift_TransportException $e) {
        DB::rollback();
        return redirect('/login')->with('error','Revise el acceso a internet');
      }
        DB::commit();
        return redirect('/login')->with('message','Usuario y nueva contraseña enviados');
        }
        else{

            return redirect('/login')->with('error','Ningún usuario registrado con ese correo');
        }

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
        $tel = $request->tel;
        $cor = $request->cor;
        $cliente = cliente::find($id);

        $cliente->nombre_Cli=$request->nombre_Cli;
        $cliente->direccion_Cli=$request->direccion_Cli;
        $cliente->id_Municipio=$request->municipios;
        $cliente->save();

        if ($cliente->tipo_Cli) {
            $clienteJuridico = clienteJuridico::where('id_Cliente',$cliente->id)->get()->first();
            $clienteJuridico->NIT_CJ=$request->NIT_CJ;
            $clienteJuridico->RNC_CJ=$request->RNC_CJ;
            $clienteJuridico->nombreResponsable_CJ=$request->nombreResponsable_CJ;
            $clienteJuridico->save();
        } else {
            $clienteNatural = clienteNatural::where('id_Cliente',$cliente->id)->get()->first();
            $clienteNatural->DUI_CN=$request->DUI_CN;
            $clienteNatural->save();
        }

        $telefonosViejos = $cliente->telefonoCliente;
        $correosViejos = $cliente->correoCliente;

        foreach ($telefonosViejos as $telefono) {
           $telefono->delete();
        }

        foreach ($correosViejos as $correo) {
           $correo->delete();
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

        return redirect('/MostrarListaCli');
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

    public function bajaCli($id)
    {
       $bajaCli = cliente::find($id);

           $bajaCli->estado_Cli= 0;

       $bajaCli-> save();
       return redirect('/MostrarListaCli/'.$id);
    }

    public function altaCli($id)
    {
       $altaCli = cliente::find($id);
       $altaCli->estado_Cli= 1;
       $altaCli-> save();
       return redirect('/DarBajaCli/'.$id);
    }
}
