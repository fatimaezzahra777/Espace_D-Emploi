<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobOffer;
use App\Models\JobApplication; 

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::where('user_id', Auth::id())->get();

        return view('candidate.applications.index', compact('applications'));
    }

    public function store(JobOffer $jobOffer)
    {
        JobApplication::firstOrCreate([
            'user_id' => Auth::id(),
            'job_offer_id' => $jobOffer->id,
        ]);

        return back()->with('success','Candidature envoyée');
    }
}

