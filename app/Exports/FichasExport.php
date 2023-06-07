<?php

namespace App\Exports;

use App\Models\persona;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class FichasExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //
        //$usuarios = User::where('id',1)->get();
        DB::statement("SET sql_mode = '' ");
        $fichas = persona::select(
            //'personas.id',
            DB::raw("CONCAT(personas.nombres,' ' ,personas.apellidoPa,' ' ,personas.apellidoMa) AS 'datos'"),
            'semestres.nombre',
            'escuelas.nombre_escuela',
            'fichas.ciclo_academico',
            //'fichas.created_at',
            'fichas.fecha',
            'fichas.observacion',
            //'fichas.puntaje_total',
            DB::raw('CASE
            WHEN puntaje_total <= 150 THEN "A"
            WHEN  puntaje_total > 150 AND  puntaje_total <=162 THEN "B"
            WHEN  puntaje_total > 162 AND  puntaje_total <=180 THEN "C"
            END as clasificacion')
            //'fichas.id AS idFicha'
        )
            ->join('escuelas', 'escuelas.id', '=', 'personas.escuelas_id')
            ->join('fichas', 'fichas.persona_id', '=', 'personas.id')
            ->join('semestres', 'semestres.id', '=', 'fichas.semestre_id')
            ->get();
        return $fichas;
    }
}
