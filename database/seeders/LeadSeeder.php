<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $leads = [
        [
            'name' => 'María González',
            'email' => 'maria.gonzalez@email.com',
            'phone' => '3312345678',
            'course_id' => 1,
            'message' => 'Me interesa el diplomado de acupuntura, ¿cuáles son los requisitos?',
            'status' => 'nuevo',
        ],
        [
            'name' => 'Carlos Ramírez',
            'email' => 'carlos.ramirez@email.com',
            'phone' => '3387654321',
            'course_id' => 3,
            'message' => 'Quiero información sobre el curso de ozonoterapia online.',
            'status' => 'contactado',
        ],
        [
            'name' => 'Ana Martínez',
            'email' => 'ana.martinez@email.com',
            'phone' => null,
            'course_id' => 5,
            'message' => '¿El curso de homeopatía tiene cupo disponible?',
            'status' => 'nuevo',
        ],
    ];

    foreach ($leads as $lead) {
        \App\Models\Lead::create($lead);
    }
}
}
