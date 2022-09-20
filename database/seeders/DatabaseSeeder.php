<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GrupoInvestigacionSeeder::class);
        $this->call(LineaInvestigacionSeeder::class);
        $this->call(RolSeeder::class);
    }
}
