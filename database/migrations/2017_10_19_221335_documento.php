<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('tipo_Doc');
            $table->integer('tipoPago_Doc');
            $table->date('fechaEmision_Doc');
            $table->integer('estado_Doc');
            $table->integer('numero_Doc');
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
        Schema::drop('documento');
    }
}
