@extends('chercheur.layout')

@section('content')

<h1 class="font-bold mb-4">Modifier formation</h1>

<form method="POST"
 action="{{ route('chercheur.educations.update',$education->id) }}">
@csrf
@method('PUT')

<input name="degree" value="{{ $education->degree }}"
 class="border p-2 w-full mb-3">

<input name="school" value="{{ $education->school }}"
 class="border p-2 w-full mb-3">

<button class="bg-blue-600 text-white px-4 py-2">Mettre à jour</button>

</form>

@endsection
