<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cotizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Cotizacion', function(Blueprint $table){
            $table->bigIncrements('idGrupo');
            $table->string('NombreGrupo');
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->string('NoHabitaciones');
            $table->string('Estado');
            $table->string('Tipo');
            $table->bigInteger('Cliente_id');
            $table->foreign('Cliente_id')->references('idCliente')->on('Clientes');
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
        //
        Schema::dropIfExists('Cotizacion');
    }
}
