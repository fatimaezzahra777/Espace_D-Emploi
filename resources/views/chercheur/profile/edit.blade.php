@extends('chercheur.layout')

@section('title','Modifier profil')

@section('content')

<h1 class="text-xl font-bold mb-4">Modifier mon profil</h1>

<form method="POST"
      action="{{ route('chercheur.profile.update',$profile->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label>Titre</label>
        <input type="text" name="title"
               value="{{ $profile->title }}"
               class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label>Résumé</label>
        <textarea name="summary"
                  class="w-full border p-2">{{ $profile->summary }}</textarea>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Mettre à jour
    </button>

</form>

@endsection
