<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rol = Roles::create([
            'nombre' => 'Administrador'
        ]);

        $rol = Roles::create([
            'nombre' => 'Digitador F. Socioeconómica'
        ]);
    }
}
