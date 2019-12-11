<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->bigIncrements('idUsuarios');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Nick')->unique();
            $table->string('password');
            $table->string('pGrupos')->nullable()->default('no');
            $table->string('pRecepcion')->nullable()->default('no');
            $table->string('pClientDis')->nullable()->default('no');
            $table->string('pAdmin')->nullable()->default('no');
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
        Schema::dropIfExists('Users');
    }
}
