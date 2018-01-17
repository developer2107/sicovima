<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class defectuosaMP extends Model
{
    protected $table = 'defectuosaMP';
    protected $fillable = ['cantidad_DMP','descripcion_DMP','id_MateriaPrima'];

public function inventarioMateriaPrima(){
   return $this->belongsTo('proveedor');
}
}
