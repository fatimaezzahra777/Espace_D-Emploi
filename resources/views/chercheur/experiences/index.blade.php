@extends('chercheur.layout')

@section('content')

<h1 class="text-xl font-bold mb-4">Mes expériences</h1>

<a href="{{ route('chercheur.experiences.create') }}" class="text-blue-600">
Ajouter
</a>

@foreach($experiences as $exp)
<div class="bg-white p-4 mt-3 rounded shadow">
    <b>{{ $exp->title }}</b> - {{ $exp->company }}

    <a href="{{ route('chercheur.experiences.edit',$exp->id) }}"
       class="text-blue-600 block">Modifier</a>
</div>
@endforeach

@endsection
