<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use SICOVIMA\proveedor;
use SICOVIMA\municipio;
use SICOVIMA\departamento;
use SICOVIMA\correoProveedor;
use SICOVIMA\telefonoProveedor;
use SICOVIMA\proveedorTipoMercaderia;
use SICOVIMA\tipoMercaderia;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use SICOVIMA\User;
use SICOVIMA\bitacora;
use Input;
use Session;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $departamento = departamento::all();
      $municipio = municipio::all();

     return view('Proyecto.Desarrollo.Proveedores.RegistroProveedor',compact('departamento','municipio'))->with('departamento', $departamento)->with('municipio', $municipio);
    }

    public function Mostrar()
    {
      $proveedor = proveedor::orderby('nombre_Prov')->where('estado_Prov',1)->get();

      return view("Proyecto.Desarrollo.Proveedores.MostrarListaProv")->with('proveedor', $proveedor);//
   }

   public function MostrarPI()
    {
      $proveedor = proveedor::orderby('nombre_Prov')->where('estado_Prov',0)->get();
      return view("Proyecto.Desarrollo.Proveedores.DarBajaProv")->with('proveedor', $proveedor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("Proyecto.Desarrollo.Proveedores.MostrarListaProv");
    }


    public function ver($id)
    {
      $proveedor = proveedor::find($id);
      // $municipio = municipio::find($id_Departamento->id_Municipio);
      // $departamento = departamento::find($id_Municipio->id_Proveedor);

      return view('Proyecto.Desarrollo.Proveedores.VerProveedor',compact('proveedor'));
    }

     public function Modificar($id)
    {
      $proveedor = proveedor::find($id);
      $departamento = departamento::all();
      $municipio = municipio::all();
      return view("Proyecto.Desarrollo.Proveedores.ModificarProv",compact('proveedor','departamento','municipio'));
    }

     public function darbajaprov()
    {
      return view("Proyecto.Desarrollo.Proveedores.DarBajaProv");
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
      if ($request->tipoMercaderia_Prov=='0') {
        $tipoMercaderia = tipoMercaderia::create([
          'nombre_tipoMer' => $request->otroMer,
        ]);
        $request -> tipoMercaderia_Prov = $tipoMercaderia->id;
      }

      $proveedor = proveedor::create([
            'nombre_Prov'=>$request->nombre_Prov,
            'NIT_Prov'=>$request->NIT_Prov,
            'direccion_Prov'=>$request->direccion_Prov,
            'id_Municipio'=>$request->municipios,
            'estado_Prov'=>1,//true---> activo
        ]);

        $tipos=tipoMercaderia::get();
        foreach ($tipos as $tipo) {
          echo $request['cb'.(String)$tipo->id];
          if($request['cb'.(String)$tipo->id]==1){
          proveedorTipoMercaderia::create([
            'id_Proveedor'=>$proveedor->id,
            'id_tipoMercaderia'=>$tipo->id,
          ]);
          }
        }
      Session::flash('message',' Proveedor registrado correctamente');
      
      bitacora::bitacoras('Registro','Registro de proveedor: '.$proveedor->nombre_Prov);

      for ($i=0; $i < count($tel); $i++) {
          telefonoProveedor::create([
          'numero_TelefonoProv'=>$tel[$i],
          'id_Proveedor'=>$proveedor->id,
      ]);
      }

      for ($i=0; $i < count($cor); $i++) {
          correoProveedor::create([
          'correo_CorreoProv'=>$cor[$i],
          'id_Proveedor'=>$proveedor->id,
      ]);
      }
        return redirect("/RegistroProveedor");
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
        $proveedor = proveedor::find($id);

        $proveedor->nombre_Prov=$request->nombre_Prov;
        $proveedor->NIT_Prov=$request->NIT_Prov;
        $proveedor->direccion_Prov=$request->direccion_Prov;
        $proveedor->id_Municipio=$request->municipios;
        $proveedor->save();
        Session::flash('message','Proveedor modificado correctamente');
      
        bitacora::bitacoras('Modificación','Modificación del proveedor: '.$proveedor->nombre_Prov);

        $telefonosViejos = $proveedor->telefonoProveedor;
        $correosViejos = $proveedor->correoProveedor;

        foreach ($telefonosViejos as $telefono) {
           $telefono->delete();
        }

        foreach ($correosViejos as $correo) {
           $correo->delete();
        }

        for ($i=0; $i < count($tel); $i++) {
            telefonoProveedor::create([
            'numero_TelefonoProv'=>$tel[$i],
            'id_Proveedor'=>$proveedor->id,
        ]);
        }

        for ($i=0; $i < count($cor); $i++) {
            correoProveedor::create([
            'correo_CorreoProv'=>$cor[$i],
            'id_Proveedor'=>$proveedor->id,
        ]);
        }

        $ptviejos=proveedorTipoMercaderia::where('id_Proveedor',$proveedor->id)->get();
        foreach ($ptviejos as $ptv) {
          $ptv->delete();
        }
        $tipos=tipoMercaderia::get();
        foreach ($tipos as $tipo) {
          echo $request['cb'.(String)$tipo->id];
          if($request['cb'.(String)$tipo->id]==1){
          proveedorTipoMercaderia::create([
            'id_Proveedor'=>$proveedor->id,
            'id_tipoMercaderia'=>$tipo->id,
          ]);
          }
        }

        return redirect('/MostrarListaProv');
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
            return $municipio;
        }else{
            return "false";
        }
    }

    public function bajaProv($id)
    {
      $bajaProv = proveedor::find($id);
      $bajaProv->estado_Prov= 0;
      $bajaProv-> save();
Session::flash('message','Proveedor dado de baja correctamente');
      
      bitacora::bitacoras('Dar de baja','Se dio de baja al proveedor: '.$bajaProv->nombre_Prov);

      return redirect('/MostrarListaProv/'.$id);
    }

    public function altaProv($id)
    {
       $altaProv = proveedor::find($id);
       $altaProv->estado_Prov= 1;
       $altaProv-> save();
Session::flash('message','Proveedor dado de alta correctamente');
      
       bitacora::bitacoras('Dar de alta','Se dio de alta al proveedor: '.$altaProv->nombre_Prov);

       return redirect('/DarBajaProv/'.$id);
    }

    public function Reportes()
    {
        // $compras = compra::with('cliente')->get();
        return view("Proyecto.Desarrollo.Proveedores.ReportesProveedor");
    }

    public function crearReporteTodosProveedor($vistaurl,$tipo)
    {
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if ($tipo==1) {
            return $pdf->stream('proveedoresActR');
        }
        if ($tipo==2) {
            return $pdf->download('proveedoresActR.pdf');
        }

    }

    public function ReportesProveedor($tipo)
    {

      $vistaurl="Proyecto.Desarrollo.Proveedores.proveedoresActR";
      return $this->crearReporteTodosProveedor($vistaurl,$tipo);     
    }

    public function crearReporteTodosProveedorI($vistaurl,$tipo)
    {
        $date = date('Y-m-d');
        $view = \View::make($vistaurl, compact('date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if ($tipo==1) {
            return $pdf->stream('proveedoresInaR');
        }
        if ($tipo==2) {
            return $pdf->download('proveedoresInaR.pdf');
        }

    }

    public function ReportesProv($tipo)
    {

      $vistaurl="Proyecto.Desarrollo.Proveedores.proveedoresInaR";
      return $this->crearReporteTodosProveedorI($vistaurl,$tipo);     
    }

    // public function ReporteProvIna()
    // {
        
    //     return view("Proyecto.Desarrollo.Proveedores.proveedoresInaR");
    // }

    // public function ReporteProvAct()
    // {
    //      $proveedor = proveedor::orderby('nombre_Prov')->where('estado_Prov',1)->get();
    //     return view("Proyecto.Desarrollo.Proveedores.proveedoresActR")->with('proveedor', $proveedor);
    // }

}
