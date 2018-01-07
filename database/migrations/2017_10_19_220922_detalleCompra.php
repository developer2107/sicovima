<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('detalleCompra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cant_DCom');
            $table->double('subtotal_DCom', 5 , 2 );
            $table->integer('id_Compra')->unsigned();
            $table->foreign('id_Compra')->references('id')->on('compra');
            $table->integer('id_MateriaPrima')->unsigned();
            $table->foreign('id_MateriaPrima')->references('id')->on('materiaPrima');
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
        Schema::drop('detalleCompra');
    }
}
