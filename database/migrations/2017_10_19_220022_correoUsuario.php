<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorreoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correoUsuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo_CorreoUsu');
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
        Schema::drop('correoUsuario');
    }
}
