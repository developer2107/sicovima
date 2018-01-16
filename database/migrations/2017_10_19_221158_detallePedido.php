<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetallePedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('detallePedido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad_DPed');
            $table->double('subtotal_DPed', 5 , 2 );
            $table->double('subtotalVenta_DPed', 5 , 2 );
            $table->boolean('estado');
            $table->boolean('estado2');
            $table->integer('id_Producto')->unsigned();
            $table->foreign('id_Producto')->references('id')->on('producto');
            $table->integer('id_Pedido')->unsigned();
            $table->foreign('id_Pedido')->references('id')->on('pedido');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detallePedido');
    }
}
