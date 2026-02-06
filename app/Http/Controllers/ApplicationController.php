<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::where('user_id', Auth::id())
            ->with('jobOffer')
            ->latest()
            ->get();

        return view('candidate.applications.index', compact('applications'));
    }

    public function store(JobOffer $jobOffer)
    {
        Application::firstOrCreate([
            'user_id'      => Auth::id(),
            'job_offer_id'=> $jobOffer->id,
        ]);

        return back()->with('success','Candidature envoyée');
    }
}
