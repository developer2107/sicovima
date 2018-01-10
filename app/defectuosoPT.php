<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class defectuosoPT extends Model
{
    protected $table = 'defectuosoPT';
    protected $fillable = ['cantidad_DPT','descripcion_DPT','id_Producto'];


	public function inventarioProductoTerminado(){
	   return $this->belongsTo('cliente');
	}
}
