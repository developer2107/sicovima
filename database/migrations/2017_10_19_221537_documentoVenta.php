<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentoVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('documentoVenta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Venta')->unsigned();
            $table->foreign('id_Venta')->references('id')->on('venta');
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
        Schema::drop('documentoVenta');
    }
}
