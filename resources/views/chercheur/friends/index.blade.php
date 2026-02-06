@extends('chercheur.layout')

@section('content')

<h1 class="font-bold mb-4">Mon réseau</h1>

@foreach($friends as $friend)
<div class="bg-white p-3 mb-2 rounded shadow">
    {{ $friend->name }}
</div>
@endforeach

@endsection
