<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOffer;
use Illuminate\Support\Facades\Auth;



class JobOfferController extends Controller
{
    public function index()
    {
        $jobOffers = JobOffer::where('is_closed', false)
                            ->latest()
                            ->get();

        return view('chercheur.job_offers.index', compact('jobOffers'));
    }

    public function show(JobOffer $jobOffer)
    {
        $candidatures = $jobOffer->applications()->with('user')->get();

        return view('chercheur.job_offers.show', compact('jobOffer', 'candidatures'));
    }


    public function create()
    {
        return view('recreteur.job_offers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'type_contrat' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $user = auth()->user();

        $offer = JobOffer::create([
            'user_id' => $user->id,
            'titre' => $request->titre,
            'description' => $request->description,
            'type_contrat' => $request->type_contrat,
            'image' => $request->file('image') ? $request->file('image')->store('job_offers') : null,
            'is_closed' => false,
        ]);

        return redirect()->route('recreteur.dashboard')->with('success', 'Offre créée avec succès !');
    }

    public function close(JobOffer $jobOffer)
    {
        $jobOffer->update([
            'is_closed' => true
        ]);

        return back();
    }
}





