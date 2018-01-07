<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClienteNatural extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('clienteNatural', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DUI_CN');
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
        Schema::drop('clienteNatural');
    }
}