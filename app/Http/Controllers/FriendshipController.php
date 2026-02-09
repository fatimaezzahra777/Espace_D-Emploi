<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Friendship;
use Illuminate\Http\Request;


class FriendShipController extends Controller
{
    
    public function index()
    {
        $user = Auth::user();

        // Amis
        $friends = User::whereIn('id',
            $user->acceptedFriendshipsSent()->pluck('receiver_id')
        )
        ->orWhereIn('id',
            $user->acceptedFriendshipsReceived()->pluck('sender_id')
        )
        ->get();

        // Personnes à inviter
        $invitables = User::where('id', '!=', $user->id)
            ->whereNotIn('id', $user->acceptedFriendshipsSent()->pluck('receiver_id'))
            ->whereNotIn('id', $user->acceptedFriendshipsReceived()->pluck('sender_id'))
            ->whereNotIn('id', $user->friendshipsSent()->pluck('receiver_id'))
            ->whereNotIn('id', $user->friendshipsReceived()->pluck('sender_id'))
            ->get();

        return view('chercheur.friends.index', compact('friends', 'invitables'));
    }

    public function send(User $user)
    {
        $authUser = Auth::user();

        $existing = Friendship::where(function ($query) use ($authUser, $user) {
            $query->where('sender_id', $authUser->id)
                  ->where('receiver_id', $user->id);
        })->orWhere(function ($query) use ($authUser, $user) {
            $query->where('sender_id', $user->id)
                  ->where('receiver_id', $authUser->id);
        })->first();

        if ($existing) {
            return redirect()->back()->with('error', 'Invitation déjà envoyée ou vous êtes déjà amis.');
        }

        Friendship::create([
            'sender_id' => $authUser->id,
            'receiver_id' => $user->id,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Invitation envoyée avec succès !');
    }


}

