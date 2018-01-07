<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('detalleVenta', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cant_DVen', 5 , 2 );
            $table->double('costoProd_DVen', 5 , 2 );
            $table->integer('id_Venta')->unsigned();
            $table->foreign('id_Venta')->references('id')->on('venta');
            $table->integer('id_Producto')->unsigned();
            $table->foreign('id_Producto')->references('id')->on('producto');
            $table->double('gananciaProd_DVen', 5 , 2 );
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
        Schema::drop('detalleVenta');
    }
}
