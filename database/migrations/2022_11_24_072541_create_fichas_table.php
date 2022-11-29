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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha'); //Fecha en que registraron en físico los documentos
            $table->text('observacion');
            $table->integer('puntaje_total');

            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');

            $table->unsignedBigInteger('procedencia_id');
            $table->foreign('procedencia_id')->references('id')->on('procedencias');

            $table->unsignedBigInteger('carga_familiar_id');
            $table->foreign('carga_familiar_id')->references('id')->on('cargas_familiares');

            $table->unsignedBigInteger('orfandad_id');
            $table->foreign('orfandad_id')->references('id')->on('orfandades');

            $table->unsignedBigInteger('situacion_economica_id');
            $table->foreign('situacion_economica_id')->references('id')->on('situaciones_economicas');

            $table->unsignedBigInteger('dependencia_economica_id');
            $table->foreign('dependencia_economica_id')->references('id')->on('dependencias_economicas');

            $table->unsignedBigInteger('pension_mensual_id');
            $table->foreign('pension_mensual_id')->references('id')->on('pensiones_mensuales');

            $table->unsignedBigInteger('vivienda_id');
            $table->foreign('vivienda_id')->references('id')->on('viviendas');

            $table->unsignedBigInteger('credito_matriculado_id');
            $table->foreign('credito_matriculado_id')->references('id')->on('creditos_matriculados');

            $table->unsignedBigInteger('credito_aprobado_id');
            $table->foreign('credito_aprobado_id')->references('id')->on('creditos_aprobados');

            $table->unsignedBigInteger('semestre');
            $table->foreign('semestre')->references('id')->on('semestres');


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
        Schema::dropIfExists('fichas');
    }
};
