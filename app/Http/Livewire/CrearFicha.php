<?php

namespace App\Http\Livewire;

use App\Models\persona;
use Livewire\Component;

class CrearFicha extends Component
{
    public $nombre;
    public $apellidoPat;
    public $apellidoMat;
    public $codigo;
    public $escuela;
    public $direccion;
    public $telefono;
    public $dir;
    public $tel;
    public $item1;
    public $item2;
    public $item3;
    public $item4;
    public $item5;
    public $item6;
    public $item7;
    public $fecha;
    public $obs;
    public $ciclo;
    public $aitem1;
    public $aitem2;

    public $estudiante;
    protected $listeners = ['terminosBusqueda' => 'buscar'];
    protected $rules = [

        'apellidoPat' => 'required|string',
        'apellidoMat' => 'required|string',
        'nombre' => 'required|string',
        'codigo' => 'required|string', //unique:equipos
        'escuela' => 'required',
        'direccion' => 'required',
        'telefono' => 'required|string',
        'item1' => 'required|string',
        'item2' => 'required|string',
        'item3' => 'required|string',
        'item4' => 'required|string',
        'item5' => 'required|string',
        'item6' => 'required|string',
        'item7' => 'required|string',
        'fecha' => 'required',
        'aitem1' => 'required|string',
        'aitem2' => 'required|string',

    ];



    public function crearFicha()
    {

        $datos =   $this->validate();
    }


    public function buscar($codigo)
    {
        $this->codigo = $codigo;
        $this->estudiante = persona::where('codigo',  $this->codigo)->first();
        if (!isset($this->estudiante)) {
            session()->flash('mensaje', 'Estudiante no encontrado, rellene el siguiente formulario');
        }
    }
    public function render()
    {
        return view('livewire.crear-ficha');
    }
}
