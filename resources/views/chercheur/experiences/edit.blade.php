@extends('chercheur.layout')

@section('content')

<h1 class="font-bold mb-4">Modifier expérience</h1>

<form method="POST"
 action="{{ route('chercheur.experiences.update',$experience->id) }}">
@csrf
@method('PUT')

<input name="title" value="{{ $experience->title }}"
 class="border p-2 w-full mb-3">

<input name="company" value="{{ $experience->company }}"
 class="border p-2 w-full mb-3">

<button class="bg-blue-600 text-white px-4 py-2">Mettre à jour</button>

</form>

@endsection
