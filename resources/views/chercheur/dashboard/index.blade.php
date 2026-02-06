@extends('chercheur.layout')

@section('title','Dashboard')

@section('content')

<h1 class="text-2xl font-bold mb-6">Dashboard Chercheur</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <a href="{{ route('chercheur.profile.index') }}"
       class="bg-white p-6 rounded shadow">
        <h2 class="font-semibold">Mon profil</h2>
        <p class="text-gray-500">Gérer mon CV</p>
    </a>

    <a href="{{ route('chercheur.applications.index') }}"
       class="bg-white p-6 rounded shadow">
        <h2 class="font-semibold">Mes candidatures</h2>
        <p class="text-gray-500">Voir mes candidatures</p>
    </a>

    <a href="{{ route('chercheur.job_offers.index') }}"
       class="bg-white p-6 rounded shadow">
        <h2 class="font-semibold">Offres d’emploi</h2>
        <p class="text-gray-500">Consulter les offres</p>
    </a>

</div>

@endsection
