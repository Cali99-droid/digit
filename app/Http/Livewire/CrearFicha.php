<?php

namespace App\Http\Livewire;

use App\Models\Ficha_Socioeconomica\CargasFamiliares;
use App\Models\Ficha_Socioeconomica\ClasificacionesSocioeconomicas;
use App\Models\Ficha_Socioeconomica\CreditosAprobados;
use App\Models\Ficha_Socioeconomica\CreditosMatriculados;
use App\Models\Ficha_Socioeconomica\DependenciasEconomicas;
use App\Models\Ficha_Socioeconomica\Orfandades;
use App\Models\Ficha_Socioeconomica\PensionesMensuales;
use App\Models\Ficha_Socioeconomica\Procedencias;
use App\Models\Ficha_Socioeconomica\SituacionesEconomicas;
use App\Models\Ficha_Socioeconomica\Viviendas;
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
        $procedencias = Procedencias::all();
        $cargasFamiliares= CargasFamiliares::all();
        $orfandades = Orfandades::all();
        $situacion = SituacionesEconomicas::all();
        $dependencias = DependenciasEconomicas::all();
        $pensiones = PensionesMensuales::all();
        $viviendas = Viviendas::all();
        $clasificacionesSocioeconomicas = ClasificacionesSocioeconomicas::all();

        $creditosMatriculados = CreditosMatriculados::all();
        $creditosAprobados = CreditosAprobados::all();
        return view('livewire.crear-ficha', compact('procedencias','cargasFamiliares','orfandades',
                                            'situacion','dependencias','pensiones','viviendas',
                                            'creditosMatriculados', 'creditosAprobados', 'clasificacionesSocioeconomicas'));
    }
}
