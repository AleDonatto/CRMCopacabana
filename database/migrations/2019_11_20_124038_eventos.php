<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Eventos', function (Blueprint $table) {
            $table->date('Fecha');
            $table->time('HoraInicio',0);
            $table->time('HoraFIn',0);
            $table->bigInteger('Grupo_id');
            $table->string('Salon_id');
            $table->foreign('Grupo_id')->references('idGrupo')->on('Cotizacion');
            $table->foreign('Salon_id')->references('idSalon')->on('Salones');
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
        Schema::dropIfExists('Eventos');
    }
}
