<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Ficha_Socioeconomica\CargasFamiliares;
use App\Models\Ficha_Socioeconomica\CreditosAprobados;
use App\Models\Ficha_Socioeconomica\CreditosMatriculados;
use App\Models\Ficha_Socioeconomica\DependenciasEconomicas;
use App\Models\Ficha_Socioeconomica\Orfandades;
use App\Models\Ficha_Socioeconomica\PensionesMensuales;
use App\Models\Ficha_Socioeconomica\Procedencias;
use App\Models\Ficha_Socioeconomica\Semestres;
use App\Models\Ficha_Socioeconomica\SituacionesEconomicas;
use App\Models\Ficha_Socioeconomica\Viviendas;

class ItemsFichaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Procedencias::create([
            'name' => 'Zona Sierra/Costa (Lugares Lejanos)',
            'puntaje' => 20
        ]);
        Procedencias::create([
            'name' => 'Zona Sierra (Lugares Cercanos)',
            'puntaje' => 18
        ]);
        Procedencias::create([
            'name' => 'De Otro Departamento',
            'puntaje' => 16
        ]);

        Procedencias::create([
            'name' => 'Del lugar',
            'puntaje' => 14
        ]);





        CargasFamiliares::create([
            'name' => 'Más de 05 hijos',
            'puntaje' => 20
        ]);
        CargasFamiliares::create([
            'name' => 'De 03 a 04 hijos',
            'puntaje' => 18
        ]);
        CargasFamiliares::create([
            'name' => 'De 01 a 02 hijos',
            'puntaje' => 16
        ]);




        
        Orfandades::create([
            'name' => 'Huérfano de Padres o Independizado',
            'puntaje' => 20
        ]);
        Orfandades::create([
            'name' => 'Huérfano de padre o madre',
            'puntaje' => 18
        ]);
        Orfandades::create([
            'name' => 'Ausencia de Padre o madre por separación',
            'puntaje' => 16
        ]);
        Orfandades::create([
            'name' => 'Con padres',
            'puntaje' => 14
        ]);





        SituacionesEconomicas::create([
            'name' => 'De 300 a 500',
            'puntaje' => 20
        ]);
        SituacionesEconomicas::create([
            'name' => 'De 501 a 700',
            'puntaje' => 18
        ]);
        SituacionesEconomicas::create([
            'name' => 'De 701 a 900',
            'puntaje' => 16
        ]);
        SituacionesEconomicas::create([
            'name' => 'De 901 a 1100',
            'puntaje' => 14
        ]);
        SituacionesEconomicas::create([
            'name' => 'De 1101 a más',
            'puntaje' => 12
        ]);





        DependenciasEconomicas::create([
            'name' => 'Se auto sostiene (eventual)',
            'puntaje' => 20
        ]);
        DependenciasEconomicas::create([
            'name' => 'De parientes o hermano (os)',
            'puntaje' => 18
        ]);
        DependenciasEconomicas::create([
            'name' => 'Del padre o madre',
            'puntaje' => 16
        ]);
        DependenciasEconomicas::create([
            'name' => 'De los padres (ambos)',
            'puntaje' => 14
        ]);
        DependenciasEconomicas::create([
            'name' => 'Se autosostiene (Ingreso Fijo)',
            'puntaje' => 12
        ]);





        PensionesMensuales::create([
            'name' => 'Menor y/o igual a S/. 100.00 - No reciben',
            'puntaje' => 20
        ]);
        PensionesMensuales::create([
            'name' => 'De S/. 101.00 a S/. 150.00',
            'puntaje' => 18
        ]);
        PensionesMensuales::create([
            'name' => 'De S/. 151.00 a S/. 200.00',
            'puntaje' => 16
        ]);
        PensionesMensuales::create([
            'name' => 'De S/. 201.00 a S/. 250.00',
            'puntaje' => 14
        ]);
        PensionesMensuales::create([
            'name' => 'De S/. 251.00 a más',
            'puntaje' => 12
        ]);




        Viviendas::create([
            'name' => 'Cuarto alquilado o cuando se traslada del Callejón de Huaylas',
            'puntaje' => 20
        ]);
        Viviendas::create([
            'name' => 'Cuidador y/o alojado',
            'puntaje' => 18
        ]);
        Viviendas::create([
            'name' => 'Casa de parientes sin pago',
            'puntaje' => 16
        ]);
        Viviendas::create([
            'name' => 'Casa de padres',
            'puntaje' => 14
        ]);




        CreditosMatriculados::create([
            'name' => 'De 19 a más créditos',
            'puntaje' => 20
        ]);
        CreditosMatriculados::create([
            'name' => 'De 16 a 18 créditos',
            'puntaje' => 18
        ]);
        CreditosMatriculados::create([
            'name' => 'De 11 a 15 créditos',
            'puntaje' => 16
        ]);




        CreditosAprobados::create([
            'name' => 'Más de 20 créditos',
            'puntaje' => 20
        ]);
        CreditosAprobados::create([
            'name' => 'De 16 a 19 créditos',
            'puntaje' => 18
        ]);
        CreditosAprobados::create([
            'name' => 'De 11 a 15 créditos',
            'puntaje' => 16
        ]);
        

        /*Semestres::create([
            'name' => 'Más de 20 créditos',
            'puntaje' => 20
        ]);*/

        
    }
}
