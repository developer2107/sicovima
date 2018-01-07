<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class estadoDocumento extends Model
{
    protected $table = 'estadoDocumento';
    protected $fillable = ['motivo_EstadoDoc','id_Documento'];

	public function documento(){
	   return $this->belongsTo('documento');
	}
}
