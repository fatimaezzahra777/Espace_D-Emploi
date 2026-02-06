<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicProfileController extends Controller
{
    
    public function show(User $user)
    {
        $user->load([
            'candidateProfile',
            'educations',
            'experiences',
            'skills'
        ]);
        
        return view('users.show', compact('user'));
    }
}
