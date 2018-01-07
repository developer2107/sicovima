<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstadoPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('estadoPedido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_EPed');
            $table->integer('cantidad_EPed');
            $table->date('fecha_EPed');
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
        Schema::drop('estadoPedido');
    }
}
