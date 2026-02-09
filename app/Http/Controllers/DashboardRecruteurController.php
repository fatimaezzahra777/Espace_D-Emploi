<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobOffer;
use App\Models\JobApplication;
use App\Models\User;

class DashboardRecruteurController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $offresActives = JobOffer::where('user_id', $user->id)
                            ->where('is_closed', false)
                            ->count();

        $candidatures = JobApplication::whereHas('jobOffer', function($q) use($user) {
            $q->where('user_id', $user->id);
        })->count();

        $nouvelles = JobApplication::whereHas('jobOffer', function($q) use($user) {
            $q->where('user_id', $user->id);
        })->where('created_at', '>=', now()->subWeek())
          ->count();

        $embauches = JobApplication::whereHas('jobOffer', function($q) use($user) {
            $q->where('user_id', $user->id);
        })->where('status', 'accepted')
          ->count();

        $mesOffres = JobOffer::where('user_id', $user->id)
                        ->withCount('applications')
                        ->get();

        $candidats = User::where('role', 'chercheur')
                    ->where('id', '!=', $user->id)
                    ->get();

        $amis = collect($user->acceptedFriendshipsSent)->map(fn($f) => $f->receiver)
                ->merge(collect($user->acceptedFriendshipsReceived)->map(fn($f) => $f->sender));

        $demandes = $user->friendRequestsReceived()->get();

        return view('Dashboard_recreteur', compact(
            'offresActives',
            'candidatures',
            'nouvelles',
            'embauches',
            'mesOffres',
            'candidats',
            'amis',
            'demandes'
        ));
    }
}
