<?php

namespace App\Http\Livewire\FichaSocioeconomica;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MostrarFichas extends Component
{
    public function render()
    {
        $fichas = DB::select("SELECT p.id, concat(p.nombres,' ',p.apellidoMa,' ',p.apellidoPa)as datos,s.nombre, e.nombre_escuela,
        f.ciclo_academico, f.fecha, f.observacion, f.puntaje_total
        FROM personas p
        INNER JOIN escuelas e on e.id = p.escuelas_id
        INNER JOIN fichas f on f.persona_id = p.id
        INNER JOIN semestres s on s.id = f.semestre_id");
        return view('livewire.ficha-socioeconomica.mostrar-fichas', compact('fichas'));
    }
}
