<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function analystDashboard()
    {
        return view('analyst-dashboard');
    }

    public function supervisorDashboard()
    {
        return view('supervisor-dashboard');
    }
}