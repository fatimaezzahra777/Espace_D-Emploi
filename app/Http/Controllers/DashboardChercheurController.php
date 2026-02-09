<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardChercheurController extends Controller
{
    public function index()
    {
        $user = Auth::user();

       
        $friendRequests = $user->friendRequestsReceived()->with('sender')->get();

        $friends = User::whereIn('id',
            $user->acceptedFriendshipsSent()->pluck('receiver_id')
        )
        ->orWhereIn('id',
            $user->acceptedFriendshipsReceived()->pluck('sender_id')
        )
        ->get();

        $invitables = User::where('id', '!=', $user->id)
            ->whereNotIn('id', $user->acceptedFriendshipsSent()->pluck('receiver_id'))
            ->whereNotIn('id', $user->acceptedFriendshipsReceived()->pluck('sender_id'))
            ->whereNotIn('id', $user->friendshipsSent()->pluck('receiver_id'))
            ->whereNotIn('id', $user->friendshipsReceived()->pluck('sender_id'))
            ->get();


        return view('Dashboard_chercheur', compact('friendRequests', 'friends', 'invitables'));
    }

}



