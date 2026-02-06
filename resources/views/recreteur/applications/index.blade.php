@extends('recreteur.layout')

@section('content')

<h1 class="text-xl font-bold mb-4">Mes candidatures</h1>

<table class="w-full bg-white">
@foreach($applications as $app)
<tr class="border-b">
    <td class="p-2">{{ $app->jobOffer->title }}</td>
    <td class="p-2">{{ $app->status }}</td>
    <td class="p-2">{{ $app->created_at->format('d/m/Y') }}</td>
</tr>
@endforeach
</table>

@endsection
