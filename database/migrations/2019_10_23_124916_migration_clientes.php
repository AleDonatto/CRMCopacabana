<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->bigIncrements('idCliente');
            $table->string('Nombre');
            $table->string('ApePaterno');
            $table->string('ApeMaterno');
            $table->string('Profesion');
            $table->date('FechaNac');
            $table->string('Telefono');
            $table->string('Celular');
            $table->string('Correo')->unique();
            $table->string('Domicilio');
            $table->string('CP');
            $table->string('Ciudad');
            $table->string('Estado');
            $table->string('Pais');
            $table->string('TipoCliente');
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
        Schema::dropIfExists('Clientes');
    }
}
