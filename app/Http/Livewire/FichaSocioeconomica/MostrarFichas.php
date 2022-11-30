<?php

namespace App\Http\Livewire\FichaSocioeconomica;

use App\Models\Ficha_Socioeconomica\Fichas;
use App\Models\persona;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MostrarFichas extends Component
{
    protected $listeners = ['delete' => 'delete'];

    public function render()
    {
        $fichas = DB::select("SELECT p.id, concat(p.nombres,' ',p.apellidoMa,' ',p.apellidoPa)as datos,s.nombre, e.nombre_escuela,
        f.ciclo_academico, f.fecha, f.observacion, f.puntaje_total, f.id as idFicha
        FROM personas p
        INNER JOIN escuelas e on e.id = p.escuelas_id
        INNER JOIN fichas f on f.persona_id = p.id
        INNER JOIN semestres s on s.id = f.semestre_id");
        return view('livewire.ficha-socioeconomica.mostrar-fichas', compact('fichas'));
    }

    
    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal-confirm', [
            'title' => 'Estás seguro que deseas eliminar el dato?',
            'icon' => 'warning',
            'id' => $id
        ]);
    }

    public function delete($id)
    {
        Fichas::where('id', $id)->delete();
    }
}
