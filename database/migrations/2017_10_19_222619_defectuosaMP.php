<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefectuosaMP extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('defectuosoMP', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cantidad_DMP', 5 , 2);
            $table->string('descripcion_DMP');
            $table->date('fecha_DMP');
            $table->integer('id_InventarioMP')->unsigned();
            $table->foreign('id_InventarioMP')->references('id')->on('inventarioMateriaPrima');
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
        Schema::drop('defectuosoMP');
    }
}
