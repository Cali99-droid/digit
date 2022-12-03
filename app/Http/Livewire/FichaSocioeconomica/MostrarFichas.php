<?php

namespace App\Http\Livewire\FichaSocioeconomica;

use App\Models\Ficha_Socioeconomica\Fichas;
use App\Models\persona;
use App\Models\personas;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;

class MostrarFichas extends Component
{
    use WithPagination;


    public $search = '';
    public $cant='25';
    protected $listeners = ['delete' => 'delete'];

    public function render()
    {
         $fichas = persona::select('personas.id', DB::raw("CONCAT(personas.nombres,' ' ,personas.apellidoPa,' ' ,personas.apellidoMa) AS 'datos'"),
        'semestres.nombre', 'escuelas.nombre_escuela',
        'fichas.ciclo_academico', 'fichas.fecha', 'fichas.observacion', 'fichas.puntaje_total', 'fichas.id AS idFicha')
        ->join('escuelas', 'escuelas.id', '=', 'personas.escuelas_id')
        ->join('fichas', 'fichas.persona_id', '=', 'personas.id')
        ->join('semestres', 'semestres.id', '=', 'fichas.semestre_id')
        ->where('personas.nombres','like','%'.$this->search.'%')
        ->orWhere('personas.apellidoPa', 'like', '%'.$this->search.'%')
        ->orWhere('personas.apellidoMa', 'like', '%'.$this->search.'%')
        ->orWhere('semestres.nombre', 'like', '%'.$this->search.'%')
        ->orWhere('escuelas.nombre_escuela', 'like', '%'.$this->search.'%')
        ->orderBy('semestres.id', 'DESC')
        ->paginate($this->cant);
        return view('livewire.ficha-socioeconomica.mostrar-fichas', compact('fichas'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
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
