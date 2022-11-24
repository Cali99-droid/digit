<?php

namespace App\Http\Livewire\Salud;

use App\Models\persona;
use Livewire\Component;

class Historial extends Component
{
    public $open = false;
    public $persona;
    public function mount(persona $persona){
        $this->persona=$persona;
    }
    public function render()
    {
        return view('livewire.salud.historial');
    }
}
