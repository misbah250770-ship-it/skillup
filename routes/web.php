<?php

use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kursus', [CourseController::class, 'index'])
    ->middleware('auth')
    ->name('courses.index');
    Route::middleware('auth')->group(function () {
    Route::get('/kursus/{course}/materi', [LessonController::class, 'index'])
        ->name('lessons.index');

    Route::get('/kursus/{course}/materi/{lesson}', [LessonController::class, 'show'])
        ->name('lessons.show');
});

Route::middleware('guest')->group(function () {
    Route::get('/daftar', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/daftar', [AuthController::class, 'register'])
        ->name('register.store');

    Route::get('/masuk', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/masuk', [AuthController::class, 'login'])
        ->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/keluar', [AuthController::class, 'logout'])
        ->name('logout');
});