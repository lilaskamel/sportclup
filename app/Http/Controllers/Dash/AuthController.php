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
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->withErrors([
                'email' => 'بيانات الدخول غير صحيحة.',
            ])->withInput();
        }

        if (auth()->user()->role !== 'admin') {
            auth()->logout(); 
            return redirect()->route('login')->withErrors([
                'email' => 'مسموح فقط للمشرفين (admin) بالدخول.',
            ]);
        }

        return redirect()->route('homePage')->with('success', 'أهلاً وسهلاً يا مشرف!');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
