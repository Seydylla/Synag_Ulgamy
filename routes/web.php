<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quiz;
use App\Models\lessons;

Route::view('/', 'entrance');

Route::view('/student/dashboard', 'student.dashboard');
Route::view('/student/online-test', 'student.online-test');
Route::view('/student/tests', 'student.tests');
Route::view('/student/settings', 'student.settings');

Route::view('/teacher/dashboard', 'teacher.dashboard');
Route::view('/teacher/online-test', 'teacher.online-test');
Route::view('/teacher/settings', 'teacher.settings');

Route::get('/teacher/tests', [quiz::class, 'index']);
Route::get('/teacher/add_quiz', [quiz::class, 'create']);
Route::post('/teacher/tests', [quiz::class, 'store']);
