<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribtion;

class SubscribtionController extends Controller
{
    public function index()
    {
        $subscribtions = Subscribtion::all();
        return view('subscribtions.index', compact('subscribtions'));
    }
}
