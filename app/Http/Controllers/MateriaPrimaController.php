<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use SICOVIMA\materiaPrima;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;

class MateriaPrimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Modificar($id)
    {
        $materiaPrima = materiaPrima::find($id);
        return view("Proyecto.Desarrollo.InventarioMP.ModificarMateriaPrima",compact('materiaPrima'));
    }

    public function Ver()
    {

    }

    public function Mostrar()
    {

    }

    public function Index()
    {
        return view('Proyecto.Desarrollo.InventarioMP.RegistroMateriaP');
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
          $MP = \SICOVIMA\materiaPrima::where('nombre_MP',$request['nombre_MP'])->where('color_MP',$request['color_MP'])->where('precio_MP',$request['precio_MP'])->count();

        if ($MP == 0) {
            $materiaPrima = \SICOVIMA\materiaPrima::create([
            'nombre_MP'=>$request['nombre_MP'],
            'tipo_MP'=>$request['tipo_MP'],
            'color_MP'=>$request['color_MP'],
            'precio_MP'=>$request['precio_MP'],
            'unidadMedida_MP'=>$request['unidadMedida_MP'],
            'estado_MP'=>true,
        ]);

            //bitacora::bitacoras('Registro','Registro de materia prima '.$materiaPrima->id.': '.$materiaPrima->nombre_MP);

        }else{
          return view('Proyecto.Desarrollo.InventarioMP.RegistroMateriaP');
        }
        return view('Proyecto.Desarrollo.InventarioMP.RegistroMateriaP');//Agregar mensaje de si se guardo o no
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view("Proyecto.Desarrollo.Ventas.RegistrarVentas")->with('producto2', $producto2);
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
        $materiaPrimaM = materiaPrima::find($id);

        $materiaPrimaM->nombre_MP=$request->nombre_MP;
        $materiaPrimaM->tipo_MP=$request->tipo_MP;
        $materiaPrimaM->color_MP=$request->color_MP;
        $materiaPrimaM->precio_MP=$request->precio_MP;
        $materiaPrimaM->unidadMedida_MP=$request->unidadMedida_MP;
        $materiaPrimaM->save();

        return redirect('/ControlMateriaPrima');
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
