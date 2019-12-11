<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bitacora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Bitacora', function(Blueprint $table){
            $table->bigIncrements('idBitacora');
            $table->integer('Usuario');
            $table->string('Host');
            $table->string('Fecha');
            $table->string('Accion');
            $table->string('Tabla');
            $table->string('Datos');
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
        Schema::dropIfExists('Bitacora');
    }
}
