<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $table = 'bitacora';


public function usuario(){
   return $this->belongsTo('\SICOVIMA\usuario','id_Usuario');
}
}
