<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::all();
        return view('subscriptions.index', compact('subscriptions'));
    }
    public function create()
    {
        return view('subscriptions.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'startDate' => 'required|date',
            'price' => 'required|numeric',
            'description' => 'required|string|max:255',
        ]);

        Subscription::create([
            'startDate' => $request->startDate,
            'price' => $request->price,
            'description' => $request->description,

        ]);

        return redirect()->route('subscriptions.index')->with('success', 'تم إنشاء الاشتراك بنجاح!');
    }
    public function destroy($id)
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->delete();

        return redirect()->route('subscriptions.index')->with('success', 'تم حذف الاشتراك بنجاح');
    }
}
