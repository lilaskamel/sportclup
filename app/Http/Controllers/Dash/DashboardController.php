<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
