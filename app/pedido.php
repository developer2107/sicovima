<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = 'pedido';

    protected $fillable = ['fecha_Ped','total_Ped', 'anticipo_Ped','fechaRecibir_Ped','fechaEntregar_Ped','id_Cliente'];

public function cliente(){
   return $this->belongsTo('\SICOVIMA\cliente','id_Cliente');
}
}
