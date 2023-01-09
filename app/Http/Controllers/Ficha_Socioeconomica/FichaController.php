<?php

namespace App\Http\Controllers\Ficha_Socioeconomica;

use App\Http\Controllers\Controller;
use App\Models\Ficha_Socioeconomica\Fichas;
use App\Models\persona;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    //

    public function mostrarDetalleAlumno($id){
        $persona = persona::findOrFail($id);
        //return $persona;
        return view('ficha.detalle_ficha', compact('persona'));
    }

    public function editar(persona $persona, Fichas $ficha){ //AHORA LO DE SUS SUBCOMPONENTES
        
        return view('ficha.edit', compact('persona', 'ficha'));
    }
    
    public function actualizar(Request $request, $idFicha){
        return "";
    }
}
