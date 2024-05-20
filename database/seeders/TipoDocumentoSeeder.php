<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoDocumento::create([
            'TIP_NOMBRE' => 'Instructivo',
            'TIP_PREFIJO' => 'INS'
        ]);

        TipoDocumento::create([
            'TIP_NOMBRE' => 'Informe',
            'TIP_PREFIJO' => 'INF'
        ]);

        TipoDocumento::create([
            'TIP_NOMBRE' => 'Política',
            'TIP_PREFIJO' => 'POL'
        ]);

        TipoDocumento::create([
            'TIP_NOMBRE' => 'Finanza',
            'TIP_PREFIJO' => 'FIN'
        ]);

        TipoDocumento::create([
            'TIP_NOMBRE' => 'Contrato',
            'TIP_PREFIJO' => 'CON'
        ]);
    }
}
