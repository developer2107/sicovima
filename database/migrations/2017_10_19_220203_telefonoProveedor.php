<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TelefonoProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('telefonoProveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_TelefonoProv');
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
        Schema::drop('telefonoProveedor');
    }
}
