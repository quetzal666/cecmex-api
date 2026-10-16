<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $modules = [
        ['course_id' => 1, 'title' => 'Módulo 1: Historia de la Acupuntura', 'description' => 'Orígenes y evolución', 'order' => 1],
        ['course_id' => 1, 'title' => 'Módulo 2: Meridianos y Puntos', 'description' => 'Los 12 meridianos principales', 'order' => 2],
        ['course_id' => 1, 'title' => 'Módulo 3: Técnicas de Inserción', 'description' => 'Práctica con agujas', 'order' => 3],
        ['course_id' => 2, 'title' => 'Módulo 1: Diagnóstico Avanzado', 'description' => 'Pulsos y lengua', 'order' => 1],
        ['course_id' => 2, 'title' => 'Módulo 2: Electroacupuntura', 'description' => 'Estimulación eléctrica', 'order' => 2],
        ['course_id' => 3, 'title' => 'Módulo 1: Fundamentos del Ozono', 'description' => 'Propiedades químicas', 'order' => 1],
        ['course_id' => 3, 'title' => 'Módulo 2: Aplicaciones Clínicas', 'description' => 'Casos prácticos', 'order' => 2],
    ];

    foreach ($modules as $module) {
        \App\Models\Module::create($module);
    }
}
}
