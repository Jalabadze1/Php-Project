<?php

namespace App\Http\Controllers;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = \App\Models\Quiz::all();
        return view('home', compact('quizzes'));
    }

}
