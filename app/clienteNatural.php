<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class clienteNatural extends Model
{
    protected $table = 'clienteNatural';
    protected $fillable = ['DUI_CN','id_Cliente'];


public function cliente(){
   return $this->belongsTo('\SICOVIMA\cliente','id_Cliente');
}
}
