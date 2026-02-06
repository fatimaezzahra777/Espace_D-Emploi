@extends('chercheur.layout')

@section('title','Mon profil')

@section('content')

<h1 class="text-xl font-bold mb-4">Mon profil</h1>

@if($profile)
    <div class="bg-white p-4 rounded shadow mb-6">
        <h2 class="font-semibold">{{ $profile->titre }}</h2>
        <p class="text-gray-600">{{ $profile->summary }}</p>

        <a href="{{ route('chercheur.profile.edit',$profile->id) }}"
           class="text-blue-600">Modifier</a>
    </div>
@else
    <a href="{{ route('chercheur.profile.create') }}"
       class="text-blue-600">Créer mon profil</a>
@endif


@if($profile)

<h2 class="font-semibold mt-6">Formations</h2>
<ul>
@foreach($profile->educations as $edu)
    <li>{{ $edu->degree }} - {{ $edu->school }}</li>
@endforeach
</ul>

<h2 class="font-semibold mt-6">Expériences</h2>
<ul>
@foreach($profile->experiences as $exp)
    <li>{{ $exp->title }} - {{ $exp->company }}</li>
@endforeach
</ul>

<h2 class="font-semibold mt-6">Compétences</h2>
<ul class="flex gap-2 flex-wrap">
@foreach($profile->skills as $skill)
    <li class="bg-gray-200 px-2 rounded">{{ $skill->name }}</li>
@endforeach
</ul>

@endif

@endsection
