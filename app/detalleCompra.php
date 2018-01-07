<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class detalleCompra extends Model
{
    protected $table = 'detalleCompra';

    protected $fillable = ['cant_DCom','subtotal_DCom', 'id_Compra','id_MateriaPrima'];


  public function compra(){
    return $this->hasMany('\SICOVIMA\compra');
   //return $this->belongsTo('compra');
  }

public function materiaPrima(){
   return $this->hasMany('\SICOVIMA\materiaPrima');
   //return $this->belongsTo('materiaPrima');
}

public static function detalle($id){
  return detalleCompra::where('id_Compra','=',$id)->get();

}

public static function detalleM($id){
  return materiaPrima::find($id);

}
}
