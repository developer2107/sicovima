<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    
    protected $table = 'usuario';

    public function telefonoUsuario(){
   return $this->hasMany('telefonoUsuario');
}

public function municipio(){
   return $this->belongsTo('municipio');
}
public function bitacora(){
return $this->hasMany('bitacora');
}

public function correoUsuario(){
return $this->hasMany('correoUsuario');
}


}
