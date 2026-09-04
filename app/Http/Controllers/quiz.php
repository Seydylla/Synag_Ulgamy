<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quiz extends Controller
{
    public function index() {
        return view('teacher.quiz.index');
    }
}
