<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('entrance');
});

Route::get('/student/dashboard', function () {
    return view('student.dashboard');
});
