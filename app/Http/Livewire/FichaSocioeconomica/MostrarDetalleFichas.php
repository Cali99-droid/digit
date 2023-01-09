<?php

namespace App\Http\Livewire\FichaSocioeconomica;

use App\Models\persona;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MostrarDetalleFichas extends Component
{
    private $persona;
    
    public function mount(persona $persona)
    {
        $this->persona = $persona;
    }

    
    public function render()
    {
        $fichas = DB::select("SELECT p.id, concat(p.nombres,' ',p.apellidoPa,' ',p.apellidoMa)as datos,s.nombre, e.nombre_escuela,
        f.ciclo_academico, f.fecha, f.observacion, f.puntaje_total, f.created_at
        FROM personas p
        INNER JOIN escuelas e on e.id = p.escuelas_id
        INNER JOIN fichas f on f.persona_id = p.id
        INNER JOIN semestres s on s.id = f.semestre_id
        WHERE p.id = ".$this->persona->id."");
        return view('livewire.ficha-socioeconomica.mostrar-detalle-fichas', compact('fichas'));
    }
}
