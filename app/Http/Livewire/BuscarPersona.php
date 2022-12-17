<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BuscarPersona extends Component
{
    public $codigob;
    protected $rules = [
        'codigob' => 'required'
    ];



    public function leerDatosFormulario()
    {
        $this->validate();
        $this->emit('terminosBusqueda', $this->codigob);
    }
    public function render()
    {
        return view('livewire.buscar-persona');
    }
}
