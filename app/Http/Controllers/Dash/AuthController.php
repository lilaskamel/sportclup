<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{


    public function formlogin()
    {
        return view('Dash.Auth.login');
    }

    // public function register(Request $request)
    // {
    //     // التحقق من صحة البيانات
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|string|min:6',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     // إنشاء المستخدم الجديد
    //     $user = User::create([
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     // تسجيل الدخول تلقائياً بعد التسجيل
    //     Auth::login($user);

    //     return redirect()->route('homePage'); // أو أي صفحة تريدها
    // }

    // طريقة تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            return view('layout.main');
            // if ($user->role === 'admin') {
            //     return redirect()->route('admin.dashboard');
            // } elseif ($user->role === 'coach') {
            //     return redirect()->route('coach.dashboard');
            // } elseif ($user->role === 'member') {
            //     return redirect()->route('member.home');
            // }

            return abort(403, 'Unauthorized role');
        }

        return back()->withErrors(['email' => 'المعلومات غير صحيحة.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
