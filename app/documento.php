<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    protected $table = 'documento';
    protected $fillable = ['tipo_Doc','tipoPago_Doc','fechaEmision_Doc','estado_Doc','numero_Doc'];

    public function documentoPedido(){
   return $this->hasMany('documentoPedido');
}

public function documentoVenta(){
return $this->hasMany('documentoVenta');
}

public function estadoDocumento(){
return $this->hasMany('estadoDocumento');
}

}
