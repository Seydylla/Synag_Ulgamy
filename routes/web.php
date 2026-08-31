<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('entrance');
});

Route::get('/student/dashboard', function () {
    return view('student.dashboard');
});

Route::get('/student/online-test', function () {
    return view('student.online-test');
});

Route::get('/student/tests', function () {
    return view('student.tests');
});

Route::get('/student/settings', function () {
    return view('student.settings');
});

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
});
