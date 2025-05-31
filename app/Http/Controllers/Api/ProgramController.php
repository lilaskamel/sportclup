<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function index()
    {
        $member = Auth::user();
        $programs = $member->programs;
        return response()->json([
            'message' => 'Programs fetched successfully.',
            'data' => $programs,
        ], 200);
    }


    public function show($id)
    {
        $program = Program::findOrFail($id);

        return response()->json([
            'status' => true,
            'message' => 'Program fetched successfully.',
            'data' => $program
        ], 200);
    }
}
