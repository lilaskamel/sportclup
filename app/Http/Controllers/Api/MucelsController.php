<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Muscel;
use Illuminate\Http\Request;

class MucelsController extends Controller
{
    public function index()
    {
        $muscles = Muscel::get();

        return response()->json([
            'status' => true,
            'message' => 'Muscles fetched successfully.',
            'data' => $muscles
        ], 200);
    }

    public function getMucelsWithExercies()
    {
        $muscles = Muscel::with('exercises')->get();

        return response()->json([
            'status' => true,
            'message' => 'Muscles with exercises fetched successfully.',
            'data' => $muscles
        ], 200);
    }

    
    public function showExercies($muscleId)
    {
        $muscle = Muscel::with('exercises')->findOrFail($muscleId);

        return response()->json([
            'status' => true,
            'message' => 'Exercises for the selected muscle fetched successfully.',
            'data' => $muscle->exercises
        ], 200);
    }
}


