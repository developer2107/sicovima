<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreUsuario_Usu');
            $table->string('contrasena_Usu');
            $table->string('nombre_Usu');
            $table->date('fechaNac_Usu');
            $table->date('fechaRegistro_Usu');
            $table->integer('tipo_Usu');
            $table->boolean('estado_Usu');
            $table->string('direccion_Usu');
            $table->integer('id_Municipio')->unsigned();
            $table->foreign('id_Municipio')->references('id')->on('municipio');
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
        Schema::drop('usuario');
    }
}
