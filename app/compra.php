<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    protected $table = 'compra';

    protected $fillable = ['numFac_Com','fecha_Com', 'total_Com','id_Proveedor'];

    public function proveedor(){

       return $this->belongsTo('\SICOVIMA\proveedor','id_Proveedor');
    }

    public function detalleCompra(){
	return $this->hasMany('\SICOVIMA\detalleCompra','id_Compra');
}
//hola 
}
