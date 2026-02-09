@extends('chercheur.layout')

@section('content')

<h1 class="text-xl font-bold">{{ $jobOffer->title }}</h1>

<p class="mb-4">{{ $jobOffer->description }}</p>

<form method="POST" action="{{ route('job_offers.apply', $jobOffer->id) }}">
    @csrf
    <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
        Postuler
    </button>
</form>


@endsection


