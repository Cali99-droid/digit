<?php

namespace App\Http\Livewire\Salud;

use App\Models\persona;
use Livewire\Component;

class Buscar extends Component
{
   public $buscar;
   protected $listeners = ['render' => 'render'];
  
    public function render()
    {
        $persona=persona::where('DNI', 'like', '%'.$this->buscar.'%')
        ->orWhere('apellidoPa', 'like', '%'.$this->buscar.'%')
        ->orWhere('apellidoMa', 'like', '%'.$this->buscar.'%')
        ->orWhere('nombres', 'like', '%'.$this->buscar.'%')
        ->orWhere('nombre_escuela', 'like', '%'.$this->buscar.'%')
        ->join('escuelas', 'escuelas.id', '=', 'personas.escuelas_id')
        ->select('personas.*', 'escuelas.nombre_escuela')
        ->orderBy('personas.id', 'desc')
        ->get();
        return view('livewire.salud.buscar',compact('persona','persona'));
    }
}
