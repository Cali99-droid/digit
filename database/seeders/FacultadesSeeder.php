<?php

namespace Database\Seeders;

use App\Models\facultad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // FACULTADES
        facultad::create([
            'nombre_facultad' => 'Facultad de Administración y Turismo'  //--> 1
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias' // --> 2
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Agrarias' // --> 3
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias del Ambiente' // --> 4
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Sociales, Educación y Comunicación' // --> 5
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Ciencias Médicas' // --> 6
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Economía y Contabilidad' // --> 7
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Ingeniería Civil' // --> 8
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Ingeniería de Minas, Geología y Metalurgia' // --> 9
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Ingeniería de Industrias Alimentarias' // --> 10
        ]);

        facultad::create([
            'nombre_facultad' => 'Facultad de Derecho y Ciencias Políticas' // --> 11
        ]);
    }
}
