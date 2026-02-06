@extends('chercheur.layout')

@section('content')

<h1 class="font-bold mb-4">Ajouter expérience</h1>

<form method="POST" action="{{ route('chercheur.experiences.store') }}">
@csrf

<input name="title" placeholder="Poste"
 class="border p-2 w-full mb-3">

<input name="company" placeholder="Entreprise"
 class="border p-2 w-full mb-3">

<button class="bg-blue-600 text-white px-4 py-2">Enregistrer</button>

</form>

@endsection
