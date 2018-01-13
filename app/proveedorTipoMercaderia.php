<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class proveedorTipoMercaderia extends Model
{
  protected $table = 'proveedorTipoMercaderia';
    protected $fillable = ['id_Proveedor','id_tipoMercaderia'];
}
