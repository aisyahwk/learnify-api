<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // ⬅️ TAMBAH INI
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\QuizController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    // ⬇️ TAMBAH INI (API ME)
    Route::get('/me', function (Request $request) {
        return response()->json($request->user());
    });

    Route::get('/courses', [CourseController::class, 'index']);
    Route::post('/courses', [CourseController::class, 'store']);

    Route::post('/progress', [ProgressController::class, 'store']);
    Route::get('/progress', [ProgressController::class, 'myProgress']);

    Route::get('/quiz/{course_id}', [QuizController::class, 'index']);
    Route::post('/quiz', [QuizController::class, 'store']);
});
