<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstadoDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadoDocumento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motivo_EstadoDoc');
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
        Schema::drop('estadoDocumento');
    }
}
