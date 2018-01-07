<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_Ped');
            $table->double('total_Ped', 5 , 2);
            $table->double('anticipo_Ped', 5 , 2);
            $table->date('fechaRecibir_Ped');
            $table->date('fechaEntregar_Ped');
            $table->integer('id_Cliente')->unsigned();
            $table->foreign('id_Cliente')->references('id')->on('cliente');
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
        Schema::drop('pedido');
    }
}
