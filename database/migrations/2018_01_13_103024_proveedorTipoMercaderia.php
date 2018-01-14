<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProveedorTipoMercaderia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('proveedorTipoMercaderia', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_Proveedor')->unsigned();
          $table->foreign('id_Proveedor')->references('id')->on('proveedor');
          $table->integer('id_tipoMercaderia')->unsigned();
          $table->foreign('id_tipoMercaderia')->references('id')->on('tipoMercaderia');
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
         Schema::drop('proveedorTipoMercaderia');
     }
}
