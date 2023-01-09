<?php

namespace App\Models\Ficha_Socioeconomica;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichas extends Model
{
    use HasFactory;
    protected $fillable = [
        'ciclo_academico',
        'fecha',
        'observacion',
        'puntaje_total',
        'persona_id',
        'procedencia_id',
        'carga_familiar_id',
        'orfandad_id',
        'situacion_economica_id',
        'dependencia_economica_id',
        'pension_mensual_id',
        'vivienda_id',
        'clasificacion_socioeconomica_id',
        'credito_matriculado_id',
        'credito_aprobado_id',
        'semestre_id',

    ];
}
