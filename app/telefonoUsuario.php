<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class telefonoUsuario extends Model
{
    protected $table = 'telefonoUsuario';

public function usuario(){
   return $this->belongsTo('usuario');
}
}
