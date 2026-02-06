<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::whereHas('jobOffer', function ($q) {
            $q->where('user_id', Auth::id());
        })
        ->with(['user','jobOffer'])
        ->get();

        return view('recreteur.applications.index', compact('applications'));
    }
}
