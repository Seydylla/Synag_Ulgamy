<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quiz;
use App\Http\Controllers\DashboardController;

Route::view('/', 'entrance');

Route::view('/student/dashboard', 'student.dashboard');
Route::view('/student/online-test', 'student.online-test');
Route::view('/student/tests', 'student.tests');
Route::view('/student/settings', 'student.settings');

Route::get('/teacher/dashboard', [DashboardController::class, 'index'])->name('teacher.dashboard');
Route::view('/teacher/online-test', 'teacher.online-test');
Route::view('/teacher/settings', 'teacher.settings');

Route::get('/teacher/tests', [quiz::class, 'index']);
Route::get('/teacher/add_quiz', [quiz::class, 'create']);
Route::post('/teacher/tests', [quiz::class, 'store']);
Route::delete('/teacher/tests/{id}', [quiz::class, 'destroy']);
Route::get('/teacher/tests/{id}/edit', [quiz::class, 'edit']);
Route::patch('/teacher/tests/{id}', [quiz::class, 'update']);
Route::get('/teacher/tests/{id}/result', [quiz::class, 'result']);
Route::get('/teacher/tests/{id}/save-pdf', [quiz::class, 'saveAllResults'])->name('teacher.tests.save_pdf');
