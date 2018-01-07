<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleProducto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cant_DProd');
            $table->double('subtotal_DProd', 5 , 2 );
            $table->integer('id_Producto')->unsigned();
            $table->foreign('id_Producto')->references('id')->on('producto');
            $table->integer('id_InventarioMP')->unsigned();
            $table->foreign('id_InventarioMP')->references('id')->on('inventarioMateriaPrima');
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
        Schema::drop('detalleProducto');
    }
}
