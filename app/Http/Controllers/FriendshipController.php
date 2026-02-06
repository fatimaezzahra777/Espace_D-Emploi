<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Friendship;



class FriendShipController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $friends = User::whereIn('id', function ($q) use ($user) {
            $q->select('receiver_id')
              ->from('friendships')
              ->where('sender_id', $user->id)
              ->where('status', 'accepted');
        })
        ->orWhereIn('id', function ($q) use ($user) {
            $q->select('sender_id')
              ->from('friendships')
              ->where('receiver_id', $user->id)
              ->where('status', 'accepted');
        })
        ->get();

        return view('chercheur.friends.index', compact('friends'));
    }

}