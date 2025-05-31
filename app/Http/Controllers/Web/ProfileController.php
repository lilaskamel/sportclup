<?PHP

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    
public function update(Request $request)
{
    $user = Auth()->user(); 

    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'nullable|string|min:6',
        'address' => 'nullable|string',
        'birth_date' => 'nullable|date',
        'gender' => 'nullable|in:m,f',
        'phone' => 'nullable|string',
        'join_date' => 'nullable|date',
    ]);

    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->address = $request->address;
    $user->birth_date = $request->birth_date;
    $user->gender = $request->gender;
    $user->phone = $request->phone;
    $user->join_date = $request->join_date;

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully.');
}
}