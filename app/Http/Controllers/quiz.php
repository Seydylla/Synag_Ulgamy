<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lessons;

class quiz extends Controller
{
    public function index() {
        return view('teacher.quiz.index');
    }

    public function create() {

        $lessons = lessons::all();

        return view('teacher.quiz.add_quiz', compact('lessons'));
    }
}
