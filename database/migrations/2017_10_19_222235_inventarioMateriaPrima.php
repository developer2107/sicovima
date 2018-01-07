<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InventarioMateriaPrima extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarioMateriaPrima', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipoMovimiento_IMP');
            $table->double('existencias_IMP', 5 , 2);
            $table->double('cantidad_IMP', 5 , 2);
            $table->date('fechaMov_IMP');
            $table->double('nuevaExistencia_IMP', 5 , 2);
            $table->integer('id_MateriaPrima')->unsigned();
            $table->foreign('id_MateriaPrima')->references('id')->on('materiaPrima');
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
        Schema::drop('inventarioMateriaPrima');
    }
}
