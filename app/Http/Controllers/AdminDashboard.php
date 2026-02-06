<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function index()
    {
        $users = User::count();
        $offers = JobOffer::count();

        return view('admin.dashboard', compact('users','offers'));
    }
}
