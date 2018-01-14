<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaPrima extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('materiaPrima', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_MP');
            $table->integer('tipo_MP')->unsigned();
            $table->foreign('tipo_MP')->references('id')->on('tipoMercaderia');
            $table->string('color_MP');
            $table->double('precio_MP', 5 , 2 );
            $table->string('unidadMedida_MP');
            $table->boolean('estado_MP');
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
        Schema::drop('materiaPrima');
    }
}
