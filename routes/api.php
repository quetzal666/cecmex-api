<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\AuthController;

// --- RUTAS PÚBLICAS (Cualquiera puede ver) ---
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::post('/leads', [LeadController::class, 'store']);

// --- RUTA DE LOGIN ---
Route::post('/login', [AuthController::class, 'login']);

// --- RUTAS PROTEGIDAS (Solo con Token) ---
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/courses', [CourseController::class, 'store']);
});