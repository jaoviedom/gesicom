<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GrupoInvestigacion;

class GrupoInvestigacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GrupoInvestigacion::create([
            'codigo' => 'COL0149388',
            'nombre' => 'GESICOM'
        ]);
    }
}
