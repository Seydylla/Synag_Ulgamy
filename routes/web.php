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
