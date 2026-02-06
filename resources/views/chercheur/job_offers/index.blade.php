@extends('chercheur.layout')

@section('content')

<h1 class="text-xl font-bold mb-4">Offres d’emploi</h1>

@foreach($jobOffers as $offer)
<div class="bg-white p-4 mb-4 rounded shadow">
    <h2 class="font-semibold">{{ $offer->title }}</h2>
    <p>{{ $offer->company_name }}</p>

    <a href="{{ route('chercheur.job_offers.show',$offer->id) }}"
       class="text-blue-600">Voir</a>
</div>
@endforeach

@endsection
