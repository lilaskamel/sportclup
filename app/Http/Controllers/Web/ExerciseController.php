<?php

namespace App\Http\Controllers\Web;

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
    public function store(Request $request)
    {
        // تحقق من وجود الصورة وتخزينها داخل مجلد exercises ضمن التخزين العام
        $path = $request->file('machineImage')->store('exercises', 'public');

        // إنشاء التمرين الجديد وتخزين مسار الصورة ضمن قاعدة البيانات
        Exercise::create([
            'note' => $request->note,
            'description' => $request->description,
            'machineName' => $request->machineName,
            'machineImage' => $path,
            'video' => $request->video,
            'machineName1' => $request->machineName1,
            'machineImage1' => $request->machineImage1, // إذا بدك كمان ترفعها بنفس الطريقة
            'video1' => $request->video1,
            'muscel_id' => $request->muscel_id,
        ]);

        return redirect()->route('exercises.index')->with('success', 'تمت إضافة التمرين بنجاح');
    }
}