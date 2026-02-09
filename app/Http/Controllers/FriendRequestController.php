<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\FriendRequest;

class FriendRequestController extends Controller
{
    // Envoyer une invitation
    public function send(User $user)
    {
        FriendRequest::firstOrCreate([
            'sender_id'   => Auth::id(),
            'receiver_id' => $user->id,
        ]);

        return back()->with('success', 'Invitation envoyée');
    }

    public function accept(User $user)
    {
        $request = FriendRequest::where('sender_id', $user->id)
            ->where('receiver_id', Auth::id())
            ->firstOrFail();

        Auth::user()->friends()->attach($user->id);
        $user->friends()->attach(Auth::id());

        $request->delete();

        return back()->with('success', 'Invitation acceptée');
    }

    public function reject(User $user)
    {
        FriendRequest::where('sender_id', $user->id)
            ->where('receiver_id', Auth::id())
            ->delete();

        return back()->with('success', 'Invitation refusée');
    }
}


