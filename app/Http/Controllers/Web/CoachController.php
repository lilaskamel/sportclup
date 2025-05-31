<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{


    public function index()
    {
        $coaches = Coach::all();
        return view('coaches.index', compact('coaches'));
    }

    public function create()
    {
        return view('coaches.create');
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

        return redirect()->route('coaches.index')->with('success', 'تم إضافة الكوتش بنجاح!');
    }

    public function edit(Coach $coach)
    {
        return view('coaches.edit', compact('coach'));
    }

    public function update(Request $request, Coach $coach)
    {
        $coach->update($request->all());
        return redirect()->route('coaches.index')->with('success', 'تم التحديث بنجاح');
    }

    public function destroy(Coach $coach)
    {
        $coach->delete();
        return redirect()->route('coaches.index')->with('success', 'تم الحذف');
    }
}
