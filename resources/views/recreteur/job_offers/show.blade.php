<h2 class="text-2xl font-bold mb-4">Candidatures pour {{ $jobOffer->titre }}</h2>

@foreach($candidatures as $candidature)
<div class="border p-4 rounded mb-2 flex justify-between items-center">
    <div>
        <p class="font-bold">{{ $candidature->user->name }}</p>
        <p>{{ $candidature->status }}</p>
        <p>Postulé le {{ $candidature->created_at->format('d/m/Y') }}</p>
    </div>
    <div class="flex space-x-2">
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Voir CV</button>
        <form action="{{ route('job_applications.accept', $candidature->id) }}" method="POST">
            @csrf
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Accepter</button>
        </form>
    </div>
</div>
@endforeach
