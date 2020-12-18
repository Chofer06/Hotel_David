<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('numero')->unsigned();
            $table->integer('cliente')->unsigned();
            $table->date('entrada');
            $table->date('salida');
            $table->timestamps();
            $table->foreign('numero')
                  ->references('numero')
                  ->on('habitaciones')
                  ->onDelete('cascade');
            $table->foreign('cliente')
                  ->references('id')
                  ->on('cliente')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
