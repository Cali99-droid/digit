<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
   protected $table = 'personas';
   protected $fillable = [
      'apellidoPa', 'apellidoMa', 'nombres', 'sexo', 'fechaNac',
      'lugarNac', 'estadoCivil', 'ocupacion', 'lugarProc', 'DNI', 'codigo', 'direccion', 'escuelas_id', 'telefono', 'direccion_tutor', 'telefono_tutor'
   ];
}
