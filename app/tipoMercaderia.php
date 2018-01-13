<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class tipoMercaderia extends Model
{
  protected $table = 'tipoMercaderia';
    protected $fillable = ['nombre_TM','estado_TM'];
}
