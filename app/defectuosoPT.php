<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class defectuosoPT extends Model
{
    protected $table = 'defectuosaPT';


public function inventarioProductoTerminado(){
   return $this->belongsTo('cliente');
}
}
