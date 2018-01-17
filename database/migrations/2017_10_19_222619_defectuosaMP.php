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
        Schema::create('defectuosaMP', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cantidad_DMP', 5 , 2);
            $table->string('descripcion_DMP');
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
        Schema::drop('defectuosoMP');
    }
}
