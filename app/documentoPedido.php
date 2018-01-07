<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class documentoPedido extends Model
{
    protected $table = 'documentoPedido';

  public function pedido(){
   return $this->belongsTo('pedido');
  }

public function documento(){
   return $this->belongsTo('documento');
}
}
