<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function store(){
        User::where('name', 'like', "%$query%")
    ->orWhere('speciality', 'like', "%$query%")
    ->get();

    }
}
