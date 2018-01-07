<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class inventarioProductoTerminado extends Model
{
    protected $table = 'inventarioProductoTerminado';

    protected $fillable = ['tipoMovimiento_IPT','existencias_IPT', 'cantidad_IPT','fechaMov_IPT','NuevaExistencia_IPT','id_Producto'];

    public function defectuosoPT(){
   return $this->hasMany('defectuosoPT');
}

public function producto(){
   return $this->belongsTo('producto');
}
}
