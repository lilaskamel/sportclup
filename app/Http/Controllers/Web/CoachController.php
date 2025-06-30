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



    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'nullable|min:8',
            'phone' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'joiningDate' => 'required|date',
            'note' => 'nullable|string',
            'descreption' => 'nullable|string',

        ]);


        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'joiningDate' => $request->joiningDate,

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
            'lastName' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'nullable|min:8',
            'phone' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'joiningDate' => 'required|date',
            'note' => 'nullable|string',
            'descreption' => 'nullable|string',

        ]);

        $user = User::findOrFail($id);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->birthdate = $request->birthdate;
        $user->joiningDate = $request->joiningDate;
        $user->save();

        if ($user->coach) {
            $user->coach->note = $request->note;
            $user->coach->descreption = $request->descreption;
            $user->coach->save();
        }

        return redirect()->route('coach.index')->with('success', 'تم تعديل بيانات المدرب بنجاح');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // حذف المدرب المرتبط (إذا كان موجود)
        if ($user->coach) {
            $user->coach->delete();
        }

        // حذف المستخدم
        $user->delete();

        return redirect()->route('coach.index')->with('success', 'تم حذف المستخدم والمدرب التابع له بنجاح');
    }
}