<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateProfileController extends Controller
{
    public function index()
    {
        $profile = auth()->user()->candidateProfile;

        return view('chercheur.profile.index', compact('profile'));
    }

    public function create()
    {
        return view('chercheur.profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'summary' => 'nullable|string',
        ]);

        auth()->user()->candidateProfile()->create($request->only('title','summary'));

        return redirect()->route('chercheur.profile.index');
    }

    public function edit(CandidateProfile $profile)
    {
        $this->authorizeProfile($profile);

        return view('chercheur.profile.edit', compact('profile'));
    }

    public function update(Request $request, CandidateProfile $profile)
    {
        $this->authorizeProfile($profile);

        $request->validate([
            'titre' => 'required|string|max:255',
            'summary' => 'nullable|string',
        ]);

        $profile->update($request->only('title','summary'));

        return redirect()->route('chercheur.profile.index');
    }

    protected function authorizeProfile($profile)
    {
        abort_if(
            $profile->user_id !== auth()->id(),
            403
        );
    }
}
