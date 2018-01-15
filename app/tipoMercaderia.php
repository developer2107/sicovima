<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class tipoMercaderia extends Model
{
  protected $table = 'tipoMercaderia';
    protected $fillable = ['nombre_TM','estado_TM'];

    public function materiaPrima(){
   return $this->hasMany('\SICOVIMA\materiaPrima','tipo_MP');
}
}
