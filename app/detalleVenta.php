<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class detalleVenta extends Model
{
    protected $table = 'detalleVenta';
    protected $fillable = ['cant_DVen','costoProd_DVen','id_Venta','id_Producto','gananciaProd_DVen'];

  public function producto(){
   return $this->belongsTo('producto');
  }

public function venta(){
   return $this->belongsTo('venta');
}
}
