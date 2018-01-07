<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class telefonoCliente extends Model
{
    protected $table = 'telefonoCliente';
    protected $fillable = ['numero_TelefonoCli','id_Cliente'];

public function cliente(){
   return $this->belongsTo('cliente');
}
}
