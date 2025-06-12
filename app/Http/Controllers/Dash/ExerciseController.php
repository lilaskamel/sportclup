<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exercise; // تأكدي أن عندك موديل Exercise

class ExerciseController extends Controller
{
    
    public function index()
    {
        $exercises = Exercise::all();
        return view('admin.exercises.index', compact('exercises'));
    }
}


