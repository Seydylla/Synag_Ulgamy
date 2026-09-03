<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'entrance');

Route::view('/student/dashboard', 'student.dashboard');
Route::view('/student/online-test', 'student.online-test');
Route::view('/student/tests', 'student.tests');
Route::view('/student/settings', 'student.settings');

Route::view('/teacher/dashboard', 'teacher.dashboard');
Route::view('/teacher/tests', 'teacher.quiz.tests');
Route::view('/teacher/online-test', 'teacher.online-test');
Route::view('/teacher/settings', 'teacher.settings');
Route::view('/teacher/add_quiz', 'teacher.quiz.add_quiz');
