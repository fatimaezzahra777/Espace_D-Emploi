<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOffer;
use Illuminate\Support\Facades\Auth;



class JobOfferController extends Controller
{
    public function index()
    {
        $jobOffers = JobOffer::where('user_id', Auth::id())->get();
        return view('chercheur.job_offers.index', compact('jobOffers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company' => 'required',
            'contract_type' => 'required',
            'image' => 'required|image'
        ]);

        $data['image'] = $request->file('image')->store('job_offers','public');
        $data['user_id'] = Auth::id();

        JobOffer::create($data);

        return redirect()->route('chercheur.job-offers.index');
    }

    public function close(JobOffer $jobOffer)
    {
        $jobOffer->update([
            'is_closed' => true
        ]);

        return back();
    }
}
