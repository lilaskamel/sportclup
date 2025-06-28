<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return view('exercises.index', compact('exercises'));
    }

    public function show($id)
    {
        $exercise = Exercise::findOrFail($id);
        return view('exercises.show', compact('exercise'));
    }
}
