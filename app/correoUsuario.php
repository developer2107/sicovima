<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class correoUsuario extends Model
{
    protected $table = 'correoUsuario';


public function usuario(){
   return $this->belongsTo('\SICOVIMA\usuario','id_Usuario');
}
}
