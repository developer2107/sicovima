<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class estadoPedido extends Model
{
    protected $table = 'estadoPedido';


public function pedido(){
   return $this->belongsTo('pedido');
}
}
