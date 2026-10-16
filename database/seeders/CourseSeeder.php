<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $courses = [
        [
            'category_id' => 1,
            'title' => 'Diplomado en Acupuntura Básica',
            'description' => 'Aprende los fundamentos de la acupuntura china, puntos energéticos y técnicas de inserción.',
            'price' => 5500.00,
            'modality' => 'presencial',
            'start_date' => '2026-11-15',
            'duration_hours' => 120,
            'is_active' => true,
        ],
        [
            'category_id' => 1,
            'title' => 'Taller de Acupuntura Avanzada',
            'description' => 'Técnicas avanzadas para profesionales con experiencia en acupuntura.',
            'price' => 3500.00,
            'modality' => 'hibrido',
            'start_date' => '2026-12-01',
            'duration_hours' => 60,
            'is_active' => true,
        ],
        [
            'category_id' => 2,
            'title' => 'Curso de Ozonoterapia Clínica',
            'description' => 'Aplicaciones clínicas de la ozonoterapia en medicina complementaria.',
            'price' => 4200.00,
            'modality' => 'online',
            'start_date' => '2026-11-20',
            'duration_hours' => 80,
            'is_active' => true,
        ],
        [
            'category_id' => 3,
            'title' => 'Fitoterapia Aplicada',
            'description' => 'Uso terapéutico de plantas medicinales mexicanas.',
            'price' => 2800.00,
            'modality' => 'presencial',
            'start_date' => '2027-01-10',
            'duration_hours' => 40,
            'is_active' => true,
        ],
        [
            'category_id' => 4,
            'title' => 'Introducción a la Homeopatía',
            'description' => 'Principios básicos de la medicina homeopática.',
            'price' => 2500.00,
            'modality' => 'online',
            'start_date' => '2026-12-05',
            'duration_hours' => 30,
            'is_active' => true,
        ],
    ];

    foreach ($courses as $course) {
        \App\Models\Course::create($course);
    }
}
}
