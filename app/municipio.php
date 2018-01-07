<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    protected $table = 'municipio';

    protected $fillable = ['nombre_Muni','id_Departamento'];

    public function proveedor(){
   return $this->hasMany('proveedor');
}

public function departamento(){
   return $this->belongsTo('departamento');
}

public function cliente(){
return $this->hasMany('cliente');
}

public function usuario(){
return $this->hasMany('usuario');
}

}
