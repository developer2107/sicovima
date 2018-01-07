<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bitacora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora', function (Blueprint $table) {
            $table->increments('id');
            $table->string('operacion_Bit');
            $table->string('modificado_Bit');
            $table->string('tabla_Bit');
            $table->date('fecha_Bit');
            $table->string('hora_Bit');
            $table->integer('id_Usuario')->unsigned();
            $table->foreign('id_Usuario')->references('id')->on('usuario');
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
        Schema::drop('bitacora');
    }
}
