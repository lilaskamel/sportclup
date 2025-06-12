<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{


    public function index()
    {
        $coach = Coach::all();
        return view('coach.index', compact('coach'));
    }

    public function create()
    {
        return view('coach.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
        ]);

        Coach::create([
            'name' => $request->name,
            'specialty' => $request->specialty,
        ]);

        return redirect()->route('coach.index')->with('success', 'تم إضافة الكوتش بنجاح!');
    }

    public function edit(Coach $coach)
    {
        return view('coach.edit', compact('coach'));
    }

    public function update(Request $request, Coach $coach)
    {
        $coach->update($request->all());
        return redirect()->route('coach.index')->with('success', 'تم التحديث بنجاح');
    }

    public function destroy(Coach $coach)
    {
        $coach->delete();
        return redirect()->route('coach.index')->with('success', 'تم الحذف');
    }
}
