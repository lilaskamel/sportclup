<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;


class CoachController extends Controller
{
    public function getMembers()
    {
        $members = Coach::with('members')->get();

        return response()->json([
            'status' => true,
            'message' => 'Members fetched successfully.',
            'data' => $members
        ], 200);
    }
    public function getPrograms($id)
    {
        $members = Member::find($id)->with('programs')->get();

        return response()->json([
            'status' => true,
            'message' => 'Members fetched successfully.',
            'data' => $members
        ], 200);
    }

   
}
