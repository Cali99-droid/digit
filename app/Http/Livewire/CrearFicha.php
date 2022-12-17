<?php

namespace App\Http\Livewire;

use App\Models\escuela;
use App\Models\persona;
use Livewire\Component;
use App\Models\Ficha_Socioeconomica\Viviendas;
use App\Models\Ficha_Socioeconomica\Orfandades;
use App\Models\Ficha_Socioeconomica\Procedencias;
use App\Models\Ficha_Socioeconomica\CargasFamiliares;
use App\Models\Ficha_Socioeconomica\ClasificacionesSocioeconomicas;
use App\Models\Ficha_Socioeconomica\CreditosAprobados;
use App\Models\Ficha_Socioeconomica\PensionesMensuales;
use App\Models\Ficha_Socioeconomica\CreditosMatriculados;
use App\Models\Ficha_Socioeconomica\SituacionesEconomicas;
use App\Models\Ficha_Socioeconomica\DependenciasEconomicas;
use App\Models\Ficha_Socioeconomica\Fichas;
use App\Models\Ficha_Socioeconomica\Semestres;
use Faker\Provider\ar_EG\Person;

class CrearFicha extends Component
{
    public $bool = false;
    public $ficha = false;
    public $total;
    public $totalAca;
    public $totalEc;
    public $clasificacion;


    public $estudiante;

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
    public $sisfho;
    public $semestre;

    protected $listeners = ['terminosBusqueda' => 'buscar'];
    protected $rules = [
        'apellidoPat' => 'required|string',
        'apellidoMat' => 'required|string',
        'nombre' => 'required|string',
        'codigo' => 'required|string', //|unique:personas
        'escuela' => 'required|not_in:0',
        'direccion' => 'required',
        'telefono' => 'numeric|required',
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
        'semestre' => 'required|not_in:0',
        'ciclo' => 'integer|between:1,12',
        'obs' => '',
        'sisfho' => '',
        'dir' => '',
        'tel' => '',


    ];



    public function crearFicha()
    {

        $datos = $this->validate();

        // dd($datos);
        $this->ficha = true;
        //sacar el total de puntos por ev socioeconomica
        $item1 = Procedencias::find($datos['item1']);
        $item2 = CargasFamiliares::find($datos['item2']);
        $item3 = Orfandades::find($datos['item3']);
        $item4 = SituacionesEconomicas::find($datos['item4']);
        $item5 = DependenciasEconomicas::find($datos['item5']);
        $item6 = PensionesMensuales::find($datos['item6']);
        $item7 = Viviendas::find($datos['item7']);
        $this->totalEc = $item1->puntaje + $item2->puntaje + $item3->puntaje + $item4->puntaje + $item5->puntaje + $item6->puntaje + $item7->puntaje;

        //sacar puntaje total por ev academica
        $aitem1 = CreditosMatriculados::find($datos['aitem1']);
        $aitem2 = CreditosAprobados::find($datos['aitem2']);

        $this->totalAca = $aitem1->puntaje + $aitem2->puntaje;
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
            $this->nombre = '';
            $this->apellidoPat = '';
            $this->apellidoMat = '';
            $this->escuela = '';
            $this->direccion = '';
            $this->telefono = '';
            $this->dir = '';
            $this->tel = '';
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

    public function saveFicha()
    {

        $datos = $this->validate();
        if ($datos['obs'] === null) {
            $datos['obs'] = '';
        }
        if ($datos['sisfho'] === '') {
            $datos['sisfho'] = null;
        }

        // valida que un estudiante tenga solo una ficha por semestre
        if ($this->bool) {
            $fich = Fichas::where('persona_id', $this->estudiante->id)->where('semestre_id', $datos['semestre'])->first();

            if ($fich) {

                session()->flash('mensaje-ficha', 'El estudiante ya tiene una ficha en este semestre');

                return;
            }

            $this->estudiante->direccion_tutor =  $datos['dir'];
            $this->estudiante->telefono_tutor  =  $datos['tel'];
            $this->estudiante->save();
            Fichas::create([
                'ciclo_academico' => $datos['ciclo'],
                'fecha' => $datos['fecha'],
                'observacion' => $datos['obs'] ?? null,
                'puntaje_total' => $this->total,
                'persona_id' => $this->estudiante->id,
                'procedencia_id' => $datos['item1'],
                'carga_familiar_id' => $datos['item2'],
                'orfandad_id' => $datos['item3'],
                'situacion_economica_id' => $datos['item4'],
                'dependencia_economica_id' => $datos['item5'],
                'pension_mensual_id' => $datos['item6'],
                'vivienda_id' => $datos['item7'],
                'clasificacion_socioeconomica_id' => $datos['sisfho'] ?? null,
                'credito_matriculado_id' => $datos['aitem1'],
                'credito_aprobado_id' => $datos['aitem2'],
                'semestre_id' => $datos['semestre'],
            ]);
            $this->ficha = false;
            session()->flash('mensaje-ok', 'Ficha guardada correctamente');
            return redirect()->route('ficha.create');
        } else {

            //validar codigo
            $estudiante = persona::where('codigo', $datos['codigo'])->first();
            if ($estudiante) {
                session()->flash('mensaje-ficha', 'El código del estudiante no se puede repetir');

                return;
            }
            //crear nuevo estudiante
            persona::create([
                'nombres' => $datos['nombre'],
                'apellidoPa' => $datos['apellidoPat'],
                'apellidoMa' => $datos['apellidoMat'],
                'sexo' => 'MASCULINO',
                'codigo' => $datos['codigo'],
                'direccion' => $datos['direccion'],
                'escuelas_id' => $datos['escuela'],
                'telefono' => $datos['telefono'],
                'direccion_tutor' => $datos['dir'],
                'telefono_tutor' => $datos['tel'],

            ]);
            //recuperar id
            $est = persona::latest('id')->first();

            //crear ficha 
            Fichas::create([
                'ciclo_academico' => $datos['ciclo'],
                'fecha' => $datos['fecha'],
                'observacion' => $datos['obs'] ?? null,
                'puntaje_total' => $this->total,
                'persona_id' => $est->id,
                'procedencia_id' => $datos['item1'],
                'carga_familiar_id' => $datos['item2'],
                'orfandad_id' => $datos['item3'],
                'situacion_economica_id' => $datos['item4'],
                'dependencia_economica_id' => $datos['item5'],
                'pension_mensual_id' => $datos['item6'],
                'vivienda_id' => $datos['item7'],
                'clasificacion_socioeconomica_id' => $datos['sisfho'] ?? null,
                'credito_matriculado_id' => $datos['aitem1'],
                'credito_aprobado_id' => $datos['aitem2'],
                'semestre_id' => $datos['semestre'],
            ]);

            session()->flash('mensaje-ok', 'Ficha y Estudiante guardada correctamente');
            return redirect()->route('ficha.create');
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
        $clasificacionesSocioeconomicas = ClasificacionesSocioeconomicas::all();

        $creditosMatriculados = CreditosMatriculados::all();
        $creditosAprobados = CreditosAprobados::all();

        $semestres = Semestres::all();
        $escuelas = escuela::all();

        return view('livewire.crear-ficha', compact(
            'procedencias',
            'cargasFamiliares',
            'orfandades',
            'situacion',
            'dependencias',
            'pensiones',
            'viviendas',
            'creditosMatriculados',
            'creditosAprobados',
            'clasificacionesSocioeconomicas',
            'semestres',
            'escuelas'
        ));
    }
}
