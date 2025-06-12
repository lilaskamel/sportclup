<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;


class CoachController extends Controller
{
    public function getMembers()
    {
        $members = User::where('role', 'member')->get();

        return response()->json([
            'status' => true,
            'message' => 'Members fetched successfully.',
            'data' => $members
        ], 200);
    }

    public function storeProgram(Request $request)
    {
        $request->validate([
            'type' => 'required|in:sport,nutrition',
            'description' => 'required|string',
            'level' => 'required|in:beginner,intermediate,advanced',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
        ]);

        $program = new Program();
        $program->coach_id = auth('coach')->id(); 
        $program->type = $request->type;
        $program->description = $request->description;
        $program->level = $request->level;

        $program->image1 = $request->file('image1')->store('programs', 'public');
        $program->image2 = $request->file('image2')->store('programs', 'public');
        $program->image3 = $request->file('image3')->store('programs', 'public');

        $program->save();

        return response()->json([
            'status' => true,
            'message' => 'Program created successfully.',
            'data' => $program
        ], 201);
    }
}
