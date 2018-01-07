<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_Prod');
            $table->string('estilo_Prod');
            $table->string('descripcion_Prod');
            $table->double('precio_Prod', 5 , 2);
            $table->string('color_Prod');
            $table->string('talla_Prod');
            $table->binary('imagen_Prod');
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
        Schema::drop('producto');
    }
}
