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
            $table->date('fechaNac')->nullable();
            $table->string('lugarNac')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('lugarProc')->nullable();
            $table->string('DNI')->nullable();
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
