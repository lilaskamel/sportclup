<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\User;

class CoachController extends Controller
{


    public function index()
    {
        $coaches = User::where('role', 'coach')->get();
        return view('coach.index', compact('coaches'));
    }

    public function create()
    {
        return view('coach.create');
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     $user = User::create([
    //         'firstName' => $request->firstName,
    //     ]);

    //     Coach::create([
    //         'note' => $request->note,
    //         'user_id' => $user->id,
    //     ]);

    //     return redirect()->route('coach.index')->with('success', 'تم إضافة الكوتش بنجاح!');
    // }


    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'note' => 'nullable|string',
            'password' => 'nullable|min:8',
        ]);


        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'role' => 'coach', // بما أنه كوتش
            'password' => bcrypt($request->password), // كلمة مرور افتراضية إن ما تم إرسال وحدة
        ]);

        // إنشاء الكوتش
        Coach::create([
            'note' => $request->note,
            'descreption' => $request->descreption ?? '', // إذا موجودة، وإلا خالية
            'user_id' => $user->id,
        ]);

        return redirect()->route('coach.index')->with('success', 'تم إضافة الكوتش بنجاح!');
    }

    public function edit($id)
    {
        $user = User::with('coach')->findOrFail($id);
        return view('coach.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'note' => 'nullable|string',
        ]);

        $user = User::findOrFail($id);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;

        $user->save();

        if ($user->coach) {
            $user->coach->note = $request->note;
            $user->coach->save();
        }

        return redirect()->route('coach.index')->with('success', 'تم تعديل بيانات المدرب بنجاح');
    }

    public function destroy(Coach $coach)
    {
        $coach->delete();
        return redirect()->route('coach.index')->with('success', 'تم الحذف');
    }
}
