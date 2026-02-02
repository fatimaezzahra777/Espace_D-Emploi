<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $users = User::where('name', 'like', "%{$query}%")
            ->orWhere('specialite', 'like', "%{$query}%")
            ->get();

        return view('search.results', compact('users', 'query'));
    }
}
