<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InventarioProductoTerminado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('inventarioProductoTerminado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipoMovimiento_IPT');
            $table->integer('existencias_IPT');
            $table->integer('cantidad_IPT');
            $table->date('fechaMov_IPT');
            $table->integer('nuevaExistencia_IPT');
            $table->integer('id_Producto')->unsigned();
            $table->foreign('id_Producto')->references('id')->on('producto');
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
        Schema::drop('inventarioProductoTerminado');
    }
}
