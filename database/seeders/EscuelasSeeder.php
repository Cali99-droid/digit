<?php

namespace Database\Seeders;

use App\Models\escuela;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscuelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // ESCUELAS
        escuela::create([
            'nombre_escuela' => 'ADMINISTRACIÓN',
            'facultades_id' => 1
        ]);
        escuela::create([
            'nombre_escuela' => 'TURISMO',
            'facultades_id' => 1
        ]);
        
        
        
        
        escuela::create([
            'nombre_escuela' => 'INGENIERÍA DE SISTEMAS E
            INFORMÁTICA',
            'facultades_id' => 2
        ]);

        escuela::create([
            'nombre_escuela' => 'ESTADÍSTICA E INFORMÁTICA',
            'facultades_id' => 2
        ]);
        escuela::create([
            'nombre_escuela' => 'MATEMÁTICA',
            'facultades_id' => 2
        ]);




        escuela::create([
            'nombre_escuela' => 'AGRONOMÍA',
            'facultades_id' => 3
        ]);
        escuela::create([
            'nombre_escuela' => 'INGENIERÍA AGRÍCOLA',
            'facultades_id' => 3
        ]);




        escuela::create([
            'nombre_escuela' => 'INGENIERÍA AMBIENTAL',
            'facultades_id' => 4
        ]);

        escuela::create([
            'nombre_escuela' => 'INGENIERÍA SANITARIA',
            'facultades_id' => 4
        ]);



        escuela::create([
            'nombre_escuela' => 'CIENCIAS DE LA COMUNICACIÓN',
            'facultades_id' => 5
        ]);

        escuela::create([
            'nombre_escuela' => 'EDUCACIÓN: COMUNICACIÓN,
            LINGÜÍSTICA Y LITERATURA',
            'facultades_id' => 5
        ]);

        escuela::create([
            'nombre_escuela' => 'EDUCACIÓN: PRIMARIA Y
            EDUCACIÓN BILINGÜE
            INTERCULTURAL',
            'facultades_id' => 5
        ]);

        escuela::create([
            'nombre_escuela' => 'EDUCACIÓN SECUNDARIA:
            MATEMÁTICA E INFORMÁTICA',
            'facultades_id' => 5
        ]);

        escuela::create([
            'nombre_escuela' => 'EDUCACIÓN: LENGUA EXTRANJERA:
            INGLÉS',
            'facultades_id' => 5
        ]);

        escuela::create([
            'nombre_escuela' => 'ARQUEOLOGÍA',
            'facultades_id' => 5
        ]);



        escuela::create([
            'nombre_escuela' => 'ENFERMERÍA',
            'facultades_id' => 6
        ]);

        escuela::create([
            'nombre_escuela' => 'OBSTETRICIA',
            'facultades_id' => 6
        ]);



        escuela::create([
            'nombre_escuela' => 'ECONOMÍA',
            'facultades_id' => 7
        ]);

        escuela::create([
            'nombre_escuela' => 'CONTABILIDAD',
            'facultades_id' => 7
        ]);



        escuela::create([
            'nombre_escuela' => 'INGENIERÍA CIVIL',
            'facultades_id' => 8
        ]);

        escuela::create([
            'nombre_escuela' => 'ARQUITECTURA Y URBANISMO',
            'facultades_id' => 8
        ]);



        escuela::create([
            'nombre_escuela' => 'INGENIERÍA DE MINAS',
            'facultades_id' => 9
        ]);




        escuela::create([
            'nombre_escuela' => 'INGENIERÍA DE INDUSTRIAS
            ALIMENTARIAS',
            'facultades_id' => 10
        ]);

        escuela::create([
            'nombre_escuela' => 'INGENIERÍA INDUSTRIAL',
            'facultades_id' => 10
        ]);



        escuela::create([
            'nombre_escuela' => 'DERECHO Y CIENCIAS POLÍTICAS',
            'facultades_id' => 11
        ]);
    }
}
