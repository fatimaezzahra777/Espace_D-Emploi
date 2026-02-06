@extends('chercheur.layout')

@section('content')

<h1 class="font-bold mb-4">Mes compétences</h1>

<form method="POST" action="{{ route('chercheur.skills.store') }}">
@csrf
<input name="name" placeholder="Compétence"
 class="border p-2">

<button class="bg-blue-600 text-white px-3 py-2">Ajouter</button>
</form>

<ul class="mt-4">
@foreach($skills as $skill)
<li class="bg-white p-2 mb-2 rounded shadow flex justify-between">
    {{ $skill->name }}

    <form method="POST"
     action="{{ route('chercheur.skills.destroy',$skill->id) }}">
        @csrf
        @method('DELETE')
        <button class="text-red-600">X</button>
    </form>
</li>
@endforeach
</ul>

@endsection
