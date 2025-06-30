<?PHP

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
        $user = Auth::user();
        $data = array_merge($request->all(), ['password'=>Hash::make($request->password)]);
        $user->update($data);
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
