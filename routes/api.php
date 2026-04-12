<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MateriController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

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

Route::get('/test', function () {
    return response()->json(['ok' => true]);
});

Route::get('/materi', [MateriController::class, 'materiIndex']);
Route::post('/materi', [MateriController::class, 'materiStore']);
Route::get('/materi/{id}', [MateriController::class, 'materiShow']);

Route::post('/submateri', [MateriController::class, 'subStore']);
Route::get('/submateri/{id}', [MateriController::class, 'subShow']);
Route::delete('/submateri/{id}', [MateriController::class, 'subDestroy']);

Route::post('/content', [MateriController::class, 'contentStore']);
Route::delete('/materi/{id}', [MateriController::class, 'materiDestroy']);
