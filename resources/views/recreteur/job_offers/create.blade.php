@extends('recreteur.layout')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Créer une nouvelle offre</h1>

    <form action="{{ route('recreteur.job_offers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded-lg shadow">
        @csrf

        <div>
            <label class="block text-gray-700">Titre de l'offre</label>
            <input type="text" name="titre" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2" rows="5" required></textarea>
        </div>

        <div>
            <label class="block text-gray-700">Type de contrat</label>
            <input type="text" name="type_contrat" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-gray-700">Image (optionnelle)</label>
            <input type="file" name="image" class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Créer l'offre</button>
    </form>
</div>
@endsection
