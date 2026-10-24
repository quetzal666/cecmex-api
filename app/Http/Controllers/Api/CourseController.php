<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // GET /api/courses - Listar todos los cursos activos
    public function index()
    {
        
        $courses = Course::with('category')
            ->where('is_active', true)
            ->get();

        return response()->json([
            'success' => true,
            'data' => $courses
        ]);
    }

    // GET /api/courses/{id} - Ver detalle de un curso
    public function show(Course $course)
    {
        $course->load('category', 'modules');

        return response()->json([
            'success' => true,
            'data' => $course
        ]);
    }

    // Los demás métodos (store, update, destroy) los protegeremos después con Sanctum
        public function store(Request $request)
    {
        // 1. Validar los datos que envía el administrador
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:200',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'modality' => 'required|in:presencial,online,hibrido',
            'start_date' => 'required|date',
            'duration_hours' => 'nullable|integer|min:1',
            'is_active' => 'boolean',
        ]);

        // 2. Crear el curso en la base de datos
        $course = Course::create($validated);

        // 3. Responder con éxito
        return response()->json([
            'success' => true,
            'message' => 'Curso creado exitosamente',
            'data' => $course
        ], 201);
    }
    public function update(Request $request, Course $course) { /* pendiente */ }
    public function destroy(Course $course) { /* pendiente */ }
}