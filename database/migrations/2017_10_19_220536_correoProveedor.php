<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorreoProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::create('correoProveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo_CorreoProv');
            $table->integer('id_Proveedor')->unsigned();
            $table->foreign('id_Proveedor')->references('id')->on('proveedor');
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
        Schema::drop('correoProveedor');
    }
}
