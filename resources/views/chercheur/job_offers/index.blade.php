@extends('chercheur.layout')

@section('content')

<h1 class="text-xl font-bold mb-4">Offres d’emploi</h1>

<div class="space-y-4">

@forelse($jobOffers as $offre)

    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
        <div class="flex items-start justify-between">
            <div class="flex space-x-4">

                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <span class="text-blue-600 font-bold">
                        {{ strtoupper(substr($offre->titre, 0, 1)) }}
                    </span>
                </div>

                <div>
                    <h3 class="font-bold text-lg text-gray-900">
                        {{ $offre->titre }}
                    </h3>

                    <p class="text-gray-600">
                        {{ $offre->entreprise ?? 'Entreprise' }}
                        • {{ $offre->ville ?? '—' }}
                    </p>

                    <div class="flex items-center space-x-4 mt-2">
                        <span class="text-sm bg-blue-100 text-blue-600 px-3 py-1 rounded-full">
                            {{ $offre->type_contrat ?? '—' }}
                        </span>

                        <span class="text-sm text-gray-500">
                            {{ $offre->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>

            </div>

            <a href="{{ route('job-offers.show', $offre->id) }}"
               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
               Voir
            </a>

        </div>
    </div>

@empty
    <p class="text-gray-500">Aucune offre pour le moment.</p>
@endforelse

</div>

@endsection
