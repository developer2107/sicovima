<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class correoCliente extends Model
{
    protected $table = 'correoCliente';
    protected $fillable = ['correo_CorreoCli','id_Cliente'];

public function cliente(){
   return $this->belongsTo('\SICOVIMA\cliente','id_Cliente');
}
}
