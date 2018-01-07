<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = 'departamento';

    protected $fillable = ['nombre_Depa'];

    public function municipio(){
   return $this->hasMany('municipio');
}

public function proveedor(){
return $this->hasMany('proveedor');
}

public static function arrayDepartamentos(){
  $departamentos=departamento::get();
  $arrayD=[];
  foreach ($departamentos as $departamento) {
    $arrayD[$departamento->id]=$departamento->nombre_Depa;
  }
  return $arrayD;
}
}
