<?php

namespace App\Http\Livewire\FichaSocioeconomica;

use App\Models\escuela;
use App\Models\Ficha_Socioeconomica\CargasFamiliares;
use App\Models\Ficha_Socioeconomica\ClasificacionesSocioeconomicas;
use App\Models\Ficha_Socioeconomica\CreditosAprobados;
use App\Models\Ficha_Socioeconomica\CreditosMatriculados;
use App\Models\Ficha_Socioeconomica\DependenciasEconomicas;
use App\Models\Ficha_Socioeconomica\Fichas;
use App\Models\Ficha_Socioeconomica\Orfandades;
use App\Models\Ficha_Socioeconomica\PensionesMensuales;
use App\Models\Ficha_Socioeconomica\Procedencias;
use App\Models\Ficha_Socioeconomica\Semestres;
use App\Models\Ficha_Socioeconomica\SituacionesEconomicas;
use App\Models\Ficha_Socioeconomica\Viviendas;
use App\Models\persona;
use Livewire\Component;

class EditarFichas extends Component
{
    public $bool = false;
    public $ficha = false;
    public $total;
    public $totalAca;
    public $totalEc;
    public $clasificacion;


    public $estudiante;
    public $IdPersona, $IDFicha; /// ID DE LA PERSONA

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

    protected $rules = [
        'apellidoPat' => 'required|string',
        'apellidoMat' => 'required|string',
        'nombre' => 'required|string',
        'codigo' => 'required|string', //|unique:personas
        'escuela' => 'required|not_in:0',
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
        'semestre' => 'required|not_in:0',
        'ciclo' => 'integer|between:1,12',
        'obs' => '',
        'sisfho' => '',
        'dir' => '',
        'tel' => '',


    ];

    public function mount($persona, $ficha)
    {
        /** THIS IS THE MODEL PERSON */
        $this->IdPersona = $persona->id;
        $this->nombre = $persona->nombres;
        $this->apellidoPat = $persona->apellidoPa;
        $this->apellidoMat = $persona->apellidoMa;
        $this->codigo = $persona->codigo;

        $this->direccion = $persona->direccion;
        $this->telefono = $persona->telefono;
        $this->dir = $persona->direccion_tutor;
        $this->tel = $persona->telefono_tutor;

        /**THIS IS THE MODEL FICHAS  */
        $this->IDFicha = $ficha->id;
        $this->item1 = $ficha->procedencia_id;
        $this->item2 = $ficha->carga_familiar_id;
        $this->item3 = $ficha->orfandad_id;
        $this->item4 = $ficha->situacion_economica_id;
        $this->item5 = $ficha->dependencia_economica_id;
        $this->item6 = $ficha->pension_mensual_id;
        $this->item7 = $ficha->vivienda_id;

        $this->sisfho = $ficha->clasificacion_socioeconomica_id;
        $this->fecha = $ficha->fecha;
        $this->obs = $ficha->observacion;

        $this->ciclo = $ficha->ciclo_academico;
        $this->aitem1 = $ficha->credito_matriculado_id;
        $this->aitem2 = $ficha->credito_aprobado_id;
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
        return view('livewire.ficha-socioeconomica.editar-fichas', compact(
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

    public function crearFicha()
    {
        $datos = $this->validate();
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


    public function Update()
    {
        $datos = $this->validate();
        if ($datos['obs'] === null) {
            $datos['obs'] = '';
        }
        if ($datos['sisfho'] === '') {
            $datos['sisfho'] = null;
        }


        // !validar que un estudiante tenga solo una ficha por semestre
        /*if ($this->bool) {*/

        //$ficha = Fichas::where('persona_id', $this->IdPersona)->where('semestre_id', $datos['semestre'])->first();

        /*if ($ficha) {

            session()->flash('mensaje-ficha', 'El estudiante ya tiene una ficha en este semestre');

            return;
        }*/
        $personas = persona::findOrFail($this->IdPersona);
        $personas->apellidoPa = $datos['apellidoPat'];
        $personas->apellidoMa = $datos['apellidoMat'];
        $personas->nombres = $datos['nombre'];
        $personas->codigo = $datos['codigo'];
        $personas->escuelas_id = $datos['escuela'];
        $personas->direccion = $datos['direccion'];
        $personas->telefono = $datos['telefono'];
        $personas->direccion_tutor = $datos['dir'];
        $personas->telefono_tutor = $datos['tel'];

        $personas->save();

        $fichas = Fichas::findOrFail($this->IDFicha);
        $fichas->ciclo_academico = $datos['ciclo'];
        $fichas->fecha = $datos['fecha'];
        $fichas->observacion = $datos['obs'] ?? null;
        $fichas->puntaje_total = $this->total;
        $fichas->persona_id = $this->IdPersona;
        $fichas->procedencia_id = $datos['item1'];
        $fichas->carga_familiar_id = $datos['item2'];
        $fichas->orfandad_id = $datos['item3'];
        $fichas->situacion_economica_id = $datos['item4'];
        $fichas->dependencia_economica_id = $datos['item5'];
        $fichas->pension_mensual_id = $datos['item6'];
        $fichas->vivienda_id = $datos['item7'];
        $fichas->clasificacion_socioeconomica_id = $datos['sisfho'] ?? null;
        $fichas->credito_matriculado_id = $datos['aitem1'];
        $fichas->credito_aprobado_id = $datos['aitem2'];
        $fichas->semestre_id = $datos['semestre'];

        $fichas->save();
        //$notification = 'Actualizado correctamente';

        $this->ficha = false;

        session()->flash('mensaje-ok', 'Ficha guardada correctamente');
        return redirect()->route('ficha.create');
        /* }*/ /*else {
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
        }*/
    }
}
