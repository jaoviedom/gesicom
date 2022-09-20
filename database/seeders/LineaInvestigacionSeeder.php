<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LineaInvestigacion;

class LineaInvestigacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LineaInvestigacion::create([
            'nombre' => 'LEM - Gestión logística, empresarial y de mercados'
        ]);
        LineaInvestigacion::create([
            'nombre' => 'GIVIT - Gestión informática, virtualización e innovación tecnológica'
        ]);
        LineaInvestigacion::create([
            'nombre' => 'ACAF - Gestión administrativa, contable y asistencia financiera'
        ]);
        LineaInvestigacion::create([
            'nombre' => 'TUGA - Gestión turística, gastronómica y hotelera'
        ]);
        LineaInvestigacion::create([
            'nombre' => 'DEPOS - Servicios en salud y desarrollo deportivo'
        ]);
        LineaInvestigacion::create([
            'nombre' => 'IFPI - Investigación para la formación profesional integral'
        ]);
    }
}
