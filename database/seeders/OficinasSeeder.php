<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Oficina;

class OficinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oficinas = [
            [
                'nombre' => 'Oficina de Tecnología Informática',
                'codigo' => 'OTI',
                'gerencia' => 'GERENCIA DE ADMINISTRACIÓN',
                'sub_gerencia' => 'SUB GERENCIA DE PERSONAL',
            ],
            [
                'nombre' => 'Oficina de Recursos Humanos',
                'codigo' => 'ORH',
                'gerencia' => 'GERENCIA DE ADMINISTRACIÓN',
                'sub_gerencia' => 'SUB GERENCIA DE PERSONAL',
            ],
            [
                'nombre' => 'Oficina de Contabilidad',
                'codigo' => 'OCO',
                'gerencia' => 'GERENCIA DE ADMINISTRACIÓN',
                'sub_gerencia' => 'SUB GERENCIA DE FINANZAS',
            ],
            [
                'nombre' => 'Oficina de Tesorería',
                'codigo' => 'OTE',
                'gerencia' => 'GERENCIA DE ADMINISTRACIÓN',
                'sub_gerencia' => 'SUB GERENCIA DE FINANZAS',
            ],
            [
                'nombre' => 'Oficina de Logística',
                'codigo' => 'OLO',
                'gerencia' => 'GERENCIA DE ADMINISTRACIÓN',
                'sub_gerencia' => 'SUB GERENCIA DE LOGÍSTICA',
            ],
            [
                'nombre' => 'Oficina de Planificación',
                'codigo' => 'OPL',
                'gerencia' => 'GERENCIA DE PLANIFICACIÓN',
                'sub_gerencia' => 'SUB GERENCIA DE DESARROLLO',
            ],
            [
                'nombre' => 'Oficina de Obras Públicas',
                'codigo' => 'OOP',
                'gerencia' => 'GERENCIA DE INFRAESTRUCTURA',
                'sub_gerencia' => 'SUB GERENCIA DE OBRAS',
            ],
            [
                'nombre' => 'Oficina de Medio Ambiente',
                'codigo' => 'OMA',
                'gerencia' => 'GERENCIA DE SERVICIOS',
                'sub_gerencia' => 'SUB GERENCIA AMBIENTAL',
            ],
        ];

        foreach ($oficinas as $oficina) {
            Oficina::create($oficina);
        }
    }
}
