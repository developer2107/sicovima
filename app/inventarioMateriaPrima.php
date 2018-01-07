<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class inventarioMateriaPrima extends Model
{
    protected $table = 'inventarioMateriaPrima';

    protected $fillable = ['tipoMovimiento_IMP','existencias_IMP', 'cantidad_IMP','fechaMov_IMP','NuevaExistencia_IMP','id_MateriaPrima'];

    public function detallePedido(){
   return $this->hasMany('detallePedido');
}

public function defectuosaMP(){
return $this->hasMany('defectuosaMP');
}

public function materiaPrima(){
return $this->belongsTo('\SICOVIMA\materiaPrima','id_MateriaPrima');
}

}
