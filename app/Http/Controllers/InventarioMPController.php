<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use SICOVIMA\materiaPrima;
use SICOVIMA\compra;
use SICOVIMA\proveedor;
use SICOVIMA\User;
use SICOVIMA\bitacora;
use SICOVIMA\inventarioMateriaPrima;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;
use Input;
use Session;
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
        $proveedor = proveedor::find($materiaPrima->id_Proveedor);
        $existencia= $materiaPrima->obtenerCantidad($materiaPrima-> id);
        //$existencia = inventarioMateriaPrima::where('id_MateriaPrima',$materiaPrima->id)->get()->last();

        return view('Proyecto.Desarrollo.InventarioMP.VerInventarioMP',compact('materiaPrima','proveedor','existencia'));
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

    // public static function motivosMat($idMotMat,$motivoMat){
    //     $imp = inventarioMateriaPrima::where('id_MateriaPrima',$idMotMat)->get()->last();
    //     $mat = materiaPrima::find($imp->id_MateriaPrima);

    //     if ($imp->nuevaExistencia_IMP!=1) {

    //         inventarioMateriaPrima::create([
    //             'tipoMovimiento_IMP'=>4,//salida por defecto
    //             'existencias_IMP'=>$imp->nuevaExistencia_IMP,//es el primer registro
    //             'cantidad_IMP'=>1,//defectuosos solo se pueden sacar 1 a la vez por el estado y el tipo de movimiento
    //             'fechaMov_IMP'=>$imp->updated_at,
    //             'nuevaExistencia_IMP'=>$imp->nuevaExistencia_IMP-1,
    //             'id_MateriaPrima'=>$mat->id,
    //         ]);

    //         $ultMatP = materiaPrima::create([
    //             'nombre_MP'=>$mat->nombre_MP,
    //             'tipo_MP'=>$mat->tipo_MP,
    //             'color_MP'=>$mat->color_MP, 
    //             'precio_MP'=>$mat->precio_MP, 
    //             'unidadMedida_MP'=>$mat->unidadMedida_MP,  
    //             'estado_MP'=>1,
    //         ]);

    //         // bitacora::bitacoras('Modificación','Modificación de producto '.$proo->id.': '.$proo->tipo_Prod.' '.$proo->estilo_Prod);
    //         // bitacora::bitacoras('Registro','Registro de producto defectuoso'.$ultProd->id.' por modificación: '.$ultProd->tipo_Prod.' '.$ultProd->estilo_Prod);


    //         inventarioMateriaPrima::create([
    //             'tipoMovimiento_IMP'=>3,//entrada por defecto
    //             'existencias_IMP'=>0,//es el primer registro
    //             'cantidad_IMP'=>1,//defectuosos solo se pueden insertar 1 a la vez por el estado
    //             'fechaMov_IMP'=>$ultMatP->created_at,
    //             'nuevaExistencia_IMP'=>0+1,
    //             'id_MateriaPrima'=>$ultMatP->id,
    //         ]);

    //         defectuosaMP::create([
    //             'cantidad_DMP'=>1,
    //             'descripcion_DMP'=>$motivoMat,
    //             'id_MateriaPrima'=>$ultMatP->id,
    //         ]); 
        

    //     }else{
    //         $mat->estado_MP = 1;
    //         $mat->save();

    //         defectuosaMP::create([
    //             'cantidad_DMP'=>1,
    //             'descripcion_DMP'=>$motivoProd,
    //             'id_MateriaPrima'=>$mat->id,
    //         ]); 

    //         // bitacora::bitacoras('Modificación','Modificación de producto '.$proo->id.' por defecto: '.$proo->tipo_Prod.' '.$proo->estilo_Prod);
        
    //     }
        
    //     return 0;
    // }


    

    // public function Cambio($id)
    // {
    //    $cambio = materiaPrima::find($id);
    //    if ($cambio->estado_MP) {
    //        $cambio->estado_MP= 0;
    //    } else {
    //        $cambio->estado_MP= 1;
    //    }
    //    $cambio-> save();
    //    return redirect('/VerInventarioMP/'.$id);
    // }
}
