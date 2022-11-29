<?php

namespace App\Http\Livewire;

use App\Models\persona;
use Livewire\Component;
use App\Models\Ficha_Socioeconomica\Viviendas;
use App\Models\Ficha_Socioeconomica\Orfandades;
use App\Models\Ficha_Socioeconomica\Procedencias;
use App\Models\Ficha_Socioeconomica\CargasFamiliares;
use App\Models\Ficha_Socioeconomica\CreditosAprobados;
use App\Models\Ficha_Socioeconomica\PensionesMensuales;
use App\Models\Ficha_Socioeconomica\CreditosMatriculados;
use App\Models\Ficha_Socioeconomica\SituacionesEconomicas;
use App\Models\Ficha_Socioeconomica\DependenciasEconomicas;

class CrearFicha extends Component
{

    public $ficha = false;
    public $total;
    public $totalAca;
    public $totalEc;
    public $clasificacion;

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
    public $bool = false;

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
        'item1' => 'required|not_in:0',
        'item2' => 'required|not_in:0',
        'item3' => 'required|not_in:0',
        'item4' => 'required|not_in:0',
        'item5' => 'required|not_in:0',
        'item6' => 'required|not_in:0',
        'item7' => 'required|not_in:0',
        'fecha' => 'required',
        'aitem1' => 'required|not_in:0',
        'aitem2' => 'required|not_in:0',

    ];



    public function crearFicha()
    {
        $datos = $this->validate();

        $this->ficha = true;
        //sacar el total de puntos por ev socioeconomica
        $this->totalEc = $datos['item1'] + $datos['item2'] + $datos['item3'] + $datos['item4'] + $datos['item5'] + $datos['item6'] + $datos['item7'];

        //sacar puntaje total por ev academica
        $this->totalAca = $datos['aitem1'] + $datos['aitem2'];
        // determinar la clasificacion

        $this->total =  $this->totalAca +  $this->totalEc;

        switch ($this->total) {
            case  $this->total <= 150:
                $this->clasificacion = 'A';
                break;
            case  $this->total > 150 &&  $this->total <= 162:
                $this->clasificacion = 'B';
                break;
            case  $this->total > 162 &&  $this->total <= 190:
                $this->clasificacion = 'C';
                break;
            default:
                # code...
                break;
        }
    }


    public function buscar($codigo)
    {
        $this->codigo = $codigo;
        $this->estudiante = persona::where('codigo',  $this->codigo)->first();


        if (!isset($this->estudiante)) {

            session()->flash('mensaje', 'Estudiante no encontrado, rellene el siguiente formulario');
            $this->nombre = null;
            $this->bool = false;
        } else {
            $this->nombre = $this->estudiante->nombres;
            $this->apellidoPat = $this->estudiante->apellidoPa;
            $this->apellidoMat = $this->estudiante->apellidoMa;
            $this->escuela = $this->estudiante->escuelas_id;
            $this->direccion = $this->estudiante->direccion;
            $this->telefono = $this->estudiante->telefono;
            $this->dir = $this->estudiante->direccion_tutor;
            $this->tel = $this->estudiante->telefono_tutor;

            $this->bool = true;
        }
    }
    public function render()
    {
        $procedencias = Procedencias::all();
        $cargasFamiliares = CargasFamiliares::all();
        $orfandades = Orfandades::all();
        $situacion = SituacionesEconomicas::all();
        $dependencias = DependenciasEconomicas::all();
        $pensiones = PensionesMensuales::all();
        $viviendas = Viviendas::all();

        $creditosMatriculados = CreditosMatriculados::all();
        $creditosAprobados = CreditosAprobados::all();
        return view('livewire.crear-ficha', compact(
            'procedencias',
            'cargasFamiliares',
            'orfandades',
            'situacion',
            'dependencias',
            'pensiones',
            'viviendas',
            'creditosMatriculados',
            'creditosAprobados'
        ));
    }
}
