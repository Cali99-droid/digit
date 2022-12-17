<?php

namespace App\Http\Livewire\Salud;

use App\Models\escuela;
use App\Models\persona;
use Livewire\Component;

class Paciente extends Component
{
    public $open = false;
    public $dni, $apellidoMa, $apellidoPa, $nombres, $sexo, $fechaNac, $lugarNac, $ocupacion, $estadoCivil, $lugarProc, $codigo, $direccion, $escuelaID;
    protected $rules=[
        'dni'=>'required|max:8',
        'apellidoMa'=>'required|max:100',
        'apellidoPa'=>'required|max:100',
        'apellidoMa'=>'required|max:100',
        'nombres'=>'required|max:100',
        'sexo'=>'required|max:100',
        'fechaNac'=>'required',
        'lugarNac'=>'required|max:100',
        'ocupacion'=>'required',
        'estadoCivil'=>'required|max:100',
        'lugarProc'=>'required|max:100',
        'codigo'=>'required|max:100',
        'direccion'=>'required|max:100'
    ];
    public function render()
    {
        $escuela = escuela::all();
        return view('livewire.salud.paciente', compact('escuela', 'escuela'));
    }
    public function guardar()
    {
        $this->validate();
        persona::create([
            'DNI' => $this->dni,
            'apellidoMa' => $this->apellidoMa,
            'apellidoPa' => $this->apellidoPa,
            'nombres' => $this->nombres,
            'sexo' => $this->sexo,
            'fechaNac' => $this->fechaNac,
            'lugarNac' => $this->lugarNac,
            'ocupacion' => $this->ocupacion,
            'estadoCivil' => $this->estadoCivil,
            'lugarProc' => $this->lugarProc,
            'codigo' => $this->codigo,
            'direccion' => $this->direccion,
            'escuelas_id' => $this->escuelaID
        ]);
        $this->reset(
            'dni',
            'apellidoMa',
            'apellidoPa',
            'nombres',
            'sexo',
            'fechaNac',
            'lugarNac',
            'ocupacion',
            'estadoCivil',
            'lugarProc',
            'codigo',
            'direccion',
            'open'
        );
        $this->emit('render');
        $this->emit('alert', 'Se registró a la persona');
    }
}
