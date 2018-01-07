<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_Prov');
            $table->string('NIT_Prov');
            $table->string('tipoMercaderia_Prov');
            $table->string('direccion_Prov');
            $table->boolean('estado_Prov');
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
        Schema::drop('proveedor');
    }
}
