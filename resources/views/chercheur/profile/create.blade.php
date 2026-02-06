@extends('chercheur.layout')

@section('title','Créer profil')

@section('content')

<h1 class="text-xl font-bold mb-4">Créer mon profil</h1>

<form method="POST" action="{{ route('chercheur.profile.store') }}">
    @csrf

    <div class="mb-4">
        <label>Titre</label>
        <input type="text" name="title" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label>Résumé</label>
        <textarea name="summary" class="w-full border p-2"></textarea>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Enregistrer
    </button>

</form>

@endsection
