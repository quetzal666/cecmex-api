<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $categories = [
        ['name' => 'Acupuntura', 'description' => 'Terapia milenaria china con agujas'],
        ['name' => 'Ozonoterapia', 'description' => 'Tratamiento con ozono medicinal'],
        ['name' => 'Fitoterapia', 'description' => 'Uso de plantas medicinales'],
        ['name' => 'Homeopatía', 'description' => 'Medicina homeopática integral'],
        ['name' => 'Quiropráctica', 'description' => 'Ajustes de columna vertebral'],
    ];

    foreach ($categories as $category) {
        \App\Models\Category::create($category);
    }
}
}
