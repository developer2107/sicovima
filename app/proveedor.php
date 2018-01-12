<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table = 'proveedor';

    protected $fillable = ['nombre_Prov','NIT_Prov', 'tipoMercaderia_Prov','direccion_Prov','estado_Prov','id_Municipio'];

public function telefonoProveedor(){
   return $this->hasMany('\SICOVIMA\telefonoProveedor','id_Proveedor');
}

public function proveedor(){

   return $this->belongsTo('\SICOVIMA\municipio','id_Municipio');
}

 public function municipio(){
    return $this->belongsTo('municipio');
 }

public function correoProveedor(){
// return $this->hasMany('correoProveedor');
 return $this->hasMany('\SICOVIMA\correoProveedor','id_Proveedor');
}

public function compra(){
return $this->hasMany('compra');
}

public static function arrayProveedores(){
  $proveedores=proveedor::get();
  $arrayP=[];
  foreach ($proveedores as $proveedor) {
    $arrayP[$proveedor->id]=$proveedor->nombre_Prov;
  }
  return $arrayP;
}

public static function numeroTelefono($id_Proveedor){
       $telefonoProveedor = telefonoProveedor::where('id_Proveedor',$id_Proveedor)->get()->first();
       if(count($telefonoProveedor)>0){
         return $telefonoProveedor;
       }else{
         return [];
       }

}

}
