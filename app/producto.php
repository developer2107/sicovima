<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $fillable = ['tipo_Prod','estilo_Prod', 'descripcion_Prod','precio_Prod','color_Prod','talla_Prod','imagen_Prod','estado_Prod','estado2_Prod','estado3_Prod'];

    public function detallePedido(){
 	return $this->hasMany('\SICOVIMA\detallePedido','id');
}

public function inventarioProductoTerminado(){
return $this->hasMany('\SICOVIMA\inventarioProductoTerminado','id');
}

public function detalleProducto(){
return $this->hasMany('\SICOVIMA\detallePedid','id');
}

public function detalleVenta(){
return $this->hasMany('\SICOVIMA\detalleVenta','id');
}


}
