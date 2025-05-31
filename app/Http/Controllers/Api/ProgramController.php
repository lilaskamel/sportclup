<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::get();
        return response()->json($programs);
    }


    public function show($id)
    {
        $program = Program::findOrFail($id);
        return response()->json($program);
    }
}
