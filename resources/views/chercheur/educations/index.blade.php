@extends('chercheur.layout')

@section('content')

<h1 class="text-xl font-bold mb-4">Mes formations</h1>

<a href="{{ route('chercheur.educations.create') }}"
   class="text-blue-600">Ajouter</a>

<table class="w-full mt-4 bg-white">
@foreach($educations as $edu)
<tr class="border-b">
    <td class="p-2">{{ $edu->degree }}</td>
    <td class="p-2">{{ $edu->ecole }}</td>
    <td class="p-2">
        <a href="{{ route('chercheur.educations.edit',$edu->id) }}"
           class="text-blue-600">Modifier</a>
    </td>
</tr>
@endforeach
</table>

@endsection
