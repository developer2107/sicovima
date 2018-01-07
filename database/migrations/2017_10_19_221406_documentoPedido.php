<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentoPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::create('documentoPedido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Pedido')->unsigned();
            $table->foreign('id_Pedido')->references('id')->on('pedido');
            $table->integer('id_Documento')->unsigned();
            $table->foreign('id_Documento')->references('id')->on('documento');
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
        Schema::drop('documentoPedido');
    }
}
