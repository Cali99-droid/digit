<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('apellidoPa');
            $table->string('apellidoMa');
            $table->string('nombres');
            $table->string('sexo')->default('MASCULINO');
            $table->date('fechaNac');
            $table->string('lugarNac');
            $table->string('estadoCivil');
            $table->string('ocupacion');
            $table->string('lugarProc');
            $table->string('DNI');
            $table->string('codigo');
            $table->string('direccion');
            $table->foreignId('escuelas_id')->references('id')
            ->on('escuelas')->onDelete('cascade');
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
        Schema::dropIfExists('personas');
    }
};
