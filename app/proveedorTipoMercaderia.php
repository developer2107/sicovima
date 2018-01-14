<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class proveedorTipoMercaderia extends Model
{
  protected $table = 'proveedorTipoMercaderia';
    protected $fillable = ['id_Proveedor','id_tipoMercaderia'];

    public function tipoMercaderia(){
       return $this->belongsTo('\SICOVIMA\tipoMercaderia','id_tipoMercaderia');
    }
}
