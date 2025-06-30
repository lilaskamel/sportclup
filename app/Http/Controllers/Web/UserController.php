<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::where('role', 'member')->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
{
    
    $validated = $request->validated();

    $validated['email'] = $request->email;

    $validated['password'] = bcrypt($validated['password']);

    $validated['role'] = 'member';

    User::create($validated);

    return redirect()->route('users.index')->with('success', 'تمت إضافة المستخدم بنجاح');
}


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'phone' => 'required|string',
            'gender' => 'required|in:male,female',
            'address' => 'nullable|string',
            'birthdate' => 'required|date',
            'joiningDate' => 'required|date',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::findOrFail($id);
        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User updated');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted');
    }
}