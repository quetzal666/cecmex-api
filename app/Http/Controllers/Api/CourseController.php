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
    public function store(Request $request) { /* pendiente */ }
    public function update(Request $request, Course $course) { /* pendiente */ }
    public function destroy(Course $course) { /* pendiente */ }
}