<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TelefonoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonoUsuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_TelefonoUsu');
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
        Schema::drop('telefonoUsuario');
    }
}