<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TelefonoCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('telefonoCliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_TelefonoCli');
            $table->integer('id_Cliente')->unsigned();
            $table->foreign('id_Cliente')->references('id')->on('cliente');
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
        Schema::drop('telefonoCliente');
    }
}
