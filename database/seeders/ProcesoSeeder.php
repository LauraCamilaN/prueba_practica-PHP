<?php

namespace Database\Seeders;

use App\Models\Proceso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proceso::create([
            'PRO_PREFIJO' => 'ING',
            'PRO_NOMBRE' => 'Ingeniería',
        ]);

        Proceso::create([
            'PRO_PREFIJO' => 'MED',
            'PRO_NOMBRE' => 'Medicina',
        ]);

        Proceso::create([
            'PRO_PREFIJO' => 'GRA',
            'PRO_NOMBRE' => 'Grastonomía',
        ]);

        Proceso::create([
            'PRO_PREFIJO' => 'ARQ',
            'PRO_NOMBRE' => 'Arquitectura',
        ]);

        Proceso::create([
            'PRO_PREFIJO' => 'CON',
            'PRO_NOMBRE' => 'Contaduria',
        ]);
    }
}
