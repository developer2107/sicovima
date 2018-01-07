<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class telefonoProveedor extends Model
{
    protected $table = 'telefonoProveedor';

    protected $fillable = ['numero_TelefonoProv','id_Proveedor'];

public function proveedor(){
   return $this->belongsTo('proveedor');
}
}
