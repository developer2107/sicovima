<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use SICOVIMA\proveedor;
use SICOVIMA\municipio;
use SICOVIMA\departamento;
use SICOVIMA\correoProveedor;
use SICOVIMA\telefonoProveedor;
use SICOVIMA\tipoMercaderia;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;

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
      $proveedor = proveedor::all();

      return view("Proyecto.Desarrollo.Proveedores.MostrarListaProv")->with('proveedor', $proveedor);//
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
      return view("Proyecto.Desarrollo.Proveedores.ModificarProv",compact('proveedor'));
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
            'tipoMercaderia_Prov'=>$request->tipoMercaderia_Prov,
            'direccion_Prov'=>$request->direccion_Prov,
            'id_Municipio'=>$request->municipios,
            'estado_Prov'=>1,//true---> activo
        ]);

      //bitacora::bitacoras('Registro','Registro de proveedor '.$proveedor->id.': '.$proveedor->nombre_Prov);
      
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
        return view("Proyecto.Desarrollo.Proveedores.VerProveedor");
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


}
