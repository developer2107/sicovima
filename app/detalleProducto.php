<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class detalleProducto extends Model
{
    protected $table = 'detalleProducto';


  public function producto(){
   return $this->belongsTo('\SICOVIMA\producto','id_Producto');
  }

public function inventarioMateriaPrima(){
   return $this->belongsTo('\SICOVIMA\inventarioMateriaPrima','id_InventarioMP');
}
}
