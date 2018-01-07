<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = ['nombre_Cli','tipo_Cli', 'estado_Cli','direccion_Cli','id_Municipio'];

    public function pedido(){
   return $this->hasMany('\SICOVIMA\pedido','id');
}

public function cliente(){

   return $this->belongsTo('\SICOVIMA\municipio','id_Municipio');
}

public function correoCliente(){
return $this->hasMany('\SICOVIMA\correoCliente','id');
}

public function municipio(){
return $this->belongsTo('\SICOVIMA\municipio','id_Municipio');
}

public function telefonoCliente(){
return $this->hasMany('\SICOVIMA\telefonoCliente','id');
}

public function clienteJuridico(){
return $this->hasMany('\SICOVIMA\clienteJuridico','id');
}

public function clienteNatural(){
return $this->hasMany('\SICOVIMA\NaturalCliente','id');
}

public function venta(){
return $this->hasMany('venta');
}

public static function numeroTelefonoCliente($id_Cliente){
      $telefonoCliente = telefonoCliente::where('id_Cliente',$id_Cliente)->get();
      if(count($telefonoCliente)>0){
        return $telefonoCliente;
      }else{
        return [];
      }

}

}
