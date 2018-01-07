<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_Cli');
            $table->boolean('tipo_Cli');
            $table->boolean('estado_Cli');
            $table->string('direccion_Cli');
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
        Schema::drop('cliente');
    }
}
