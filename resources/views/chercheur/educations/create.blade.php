@extends('chercheur.layout')

@section('content')

<h1 class="font-bold mb-4">Ajouter formation</h1>

<form method="POST" action="{{ route('chercheur.educations.store') }}">
@csrf

<input name="degree" placeholder="Diplôme" class="border p-2 w-full mb-3">
<input name="school" placeholder="École" class="border p-2 w-full mb-3">

<button class="bg-blue-600 text-white px-4 py-2">Enregistrer</button>

</form>

@endsection
