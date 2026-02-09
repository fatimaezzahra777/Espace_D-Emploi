@extends('chercheur.layout')

@section('content')

<h1 class="font-bold text-xl mb-4">Mon réseau</h1>

<!-- Amis confirmés -->
<h2 class="font-semibold mb-2">Mes amis</h2>
@forelse($friends as $friend)
<div class="bg-white p-3 mb-2 rounded shadow flex justify-between items-center">
    {{ $friend->name }}
    <span class="text-green-600 text-sm">✔ Connecté</span>
</div>
@empty
<p class="text-gray-500">Vous n’avez pas encore d’amis.</p>
@endforelse

<hr class="my-4">

<!-- Personnes à inviter -->
<h2 class="font-semibold mb-2">Personnes à inviter</h2>
@forelse($invitables as $user)
<div class="bg-white p-3 mb-2 rounded shadow flex justify-between items-center">
    {{ $user->name }}
    <form method="POST" action="{{ route('friends.send', $user->id) }}">

        @csrf
        <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">
            Envoyer invitation
        </button>
    </form>
</div>
@empty
<p class="text-gray-500">Aucune personne disponible pour l’invitation.</p>
@endforelse

@endsection
