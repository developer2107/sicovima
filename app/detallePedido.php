<?php
namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class detallePedido extends Model
{
    protected $table = 'detallePedido';

    protected $fillable = ['cantidad_DPed','subtotal_DPed', 'subtotalVenta_DPed','id_Producto','id_Pedido'];

    public function producto(){
       return $this->belongsTo('\SICOVIMA\producto','id_Producto');
    }

public function pedido(){
   return $this->belongsTo('\SICOVIMA\pedido','id_Pedido');
}
}
