<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $table = 'venta';
    protected $fillable = ['can_Ven','fecha_Ven', 'total_Ven','id_Cliente','estado_Ven'];

	public function cliente(){
	   return $this->belongsTo('SICOVIMA\cliente','id_Cliente');
	}

	public function detalleVenta(){
		return $this->hasMany('SICOVIMA\detalleVenta','id_Venta');
	}

	public static function numeroDocumento($id_Venta){
		$documentoVenta = documentoVenta::where('id_Venta',$id_Venta)->get()->first();
		$documento = documento::where('id',$documentoVenta->id_Documento)->get()->first();
 		return $documento->numero_Doc;
	}

}
