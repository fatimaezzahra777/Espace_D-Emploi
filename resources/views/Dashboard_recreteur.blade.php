<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Recruteur - Talentia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    @include('recreteur.partials.navbar')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl p-8 mb-8 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold mb-2">Bienvenue, {{ auth()->user()->name }} !</h1>
                    <p class="text-lg opacity-90">Gérez vos offres et trouvez les meilleurs talents</p>
                </div>
                <a href="#" class="bg-white text-purple-600 px-6 py-3 rounded-lg font-bold hover:shadow-xl transition">
                    + Créer une offre
                </a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <p class="text-gray-500 text-sm font-medium">Offres actives</p>
                <p class="text-3xl font-bold text-blue-600">{{ $offresActives }}</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <p class="text-gray-500 text-sm font-medium">Candidatures</p>
                <p class="text-3xl font-bold text-purple-600">{{ $candidatures }}</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <p class="text-gray-500 text-sm font-medium">Nouvelles</p>
                <p class="text-3xl font-bold text-green-600">{{ $nouvelles }}</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <p class="text-gray-500 text-sm font-medium">Embauches</p>
                <p class="text-3xl font-bold text-yellow-600">{{ $embauches }}</p>
            </div>
        </div>


        

<div class="flex gap-8">
    <!-- Main content -->
    <div class="flex-1 space-y-6">
        <!-- Ici tu gardes tout ton contenu principal : offres, candidatures, invitations, demandes d'amis -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Mes offres actives -->
                @foreach($mesOffres as $offre)
                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <h3 class="font-bold text-lg text-gray-900">{{ $offre->title }}</h3>
                            <p class="text-gray-600 text-sm">{{ $offre->type }} • {{ $offre->location }} • Publié le {{ $offre->created_at->format('d/m/Y') }}</p>
                        </div>
                        <div class="flex space-x-2">
                            <a href="{{ route('recreteur.job_offers.edit', $offre->id) }}" class="text-blue-600 hover:text-blue-800">Modifier</a>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-4 text-sm">
                            <span class="text-gray-600">{{ $offre->views }} vues</span>
                            <span class="text-blue-600 font-medium">{{ $offre->applications_count ?? 0 }} candidatures</span>
                        </div>
                        <a href="{{ route('job_offers.show', $offre->id) }}" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Voir les candidats →</a>
                    </div>
                </div>
                @endforeach


                <h3 class="text-lg font-bold mb-4">Envoyer une invitation</h3>
                @foreach($candidats as $candidat)
                    <div class="flex justify-between items-center border-b py-2">
                        <span>{{ $candidat->name }}</span>
                        <form method="POST" action="{{ route('friends.send', $candidat->id) }}">
                            @csrf
                            <button class="bg-blue-600 text-white px-3 py-1 rounded">Inviter</button>
                        </form>
                    </div>
                @endforeach



                <!-- Nouvelles candidatures -->
                @foreach($mesOffres as $offre)
                @foreach($offre->applications as $application)
                    <div class="flex items-center justify-between border-b pb-4">
                        <div class="flex items-center space-x-4">
                            <img src="https://ui-avatars.com/api/?name={{ $application->user->name }}&background=3b82f6&color=fff" 
                                 class="w-12 h-12 rounded-full" 
                                 alt="Candidate">
                            <div>
                                <h3 class="font-bold text-gray-900">{{ $application->user->name }}</h3>
                                <p class="text-sm text-gray-600">{{ $application->user->profession ?? '' }} • {{ $application->user->experience ?? '' }} ans d'expérience</p>
                                <p class="text-xs text-gray-500 mt-1">Postulé pour: {{ $offre->titre }}</p>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-sm">Voir CV</button>
                            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-sm">Accepter</button>
                        </div>
                    </div>
                @endforeach
            @endforeach


            <h3 class="text-lg font-bold mt-6">Mes amis</h3>
            @foreach($amis as $ami)
                <div class="flex justify-between items-center border-b py-2">
                    <span>{{ $ami->name }}</span>
                    <span class="text-green-600 text-sm font-medium">Ami</span>
                </div>
            @endforeach


          <h3 class="text-lg font-bold mt-6">Demandes d'amis</h3>
            @foreach($demandes as $demande)
                @if($demande->sender)
                    <div class="flex justify-between items-center border-b py-2">
                        <span>{{ $demande->sender->name }}</span>
                        <div class="space-x-2">
                            <form action="{{ route('friends.accept', $demande->sender->id) }}" method="POST" class="inline">
                                @csrf
                                <button class="bg-green-600 text-white px-3 py-1 rounded">Accepter</button>
                            </form>
                            <form action="{{ route('friends.reject', $demande->sender->id) }}" method="POST" class="inline">
                                @csrf
                                <button class="bg-red-600 text-white px-3 py-1 rounded">Refuser</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
    </div>

    <!-- Sidebar -->
    <aside class="w-80 flex-shrink-0 space-y-6 sticky top-8">
        <!-- Actions rapides -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Actions rapides</h3>
            <div class="space-y-3">
                <a href="{{ route('recreteur.job_offers.create') }}" 
   class="bg-white text-purple-600 px-6 py-3 rounded-lg font-bold hover:shadow-xl transition">
   + Créer une offre
</a>



                <button class="w-full bg-purple-600 text-white px-4 py-3 rounded-lg hover:bg-purple-700 transition flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    Rechercher candidats
                </button>
                <button class="w-full bg-green-600 text-white px-4 py-3 rounded-lg hover:bg-green-700 transition flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    Voir statistiques
                </button>
            </div>
        </div>

        <!-- Statistiques du mois -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Ce mois-ci</h3>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-sm text-gray-600">Taux de réponse</span>
                        <span class="text-sm font-bold text-blue-600">78%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 78%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-sm text-gray-600">Offres pourvues</span>
                        <span class="text-sm font-bold text-green-600">62%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 62%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-sm text-gray-600">Engagement</span>
                        <span class="text-sm font-bold text-purple-600">85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top candidats -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Top candidats du mois</h3>
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <img src="https://ui-avatars.com/api/?name=Karim+Amrani&background=f59e0b&color=fff" class="w-10 h-10 rounded-full" alt="Top candidate">
                    <div class="flex-1">
                        <p class="font-medium text-sm">Karim Amrani</p>
                        <p class="text-xs text-gray-500">Développeur Senior</p>
                    </div>
                    <span class="text-yellow-500">⭐ 4.9</span>
                </div>
                <div class="flex items-center space-x-3">
                    <img src="https://ui-avatars.com/api/?name=Leila+Bennis&background=ec4899&color=fff" class="w-10 h-10 rounded-full" alt="Top candidate">
                    <div class="flex-1">
                        <p class="font-medium text-sm">Leila Bennis</p>
                        <p class="text-xs text-gray-500">Data Scientist</p>
                    </div>
                    <span class="text-yellow-500">⭐ 4.8</span>
                </div>
                <div class="flex items-center space-x-3">
                    <img src="https://ui-avatars.com/api/?name=Yassine+Ziani&background=06b6d4&color=fff" class="w-10 h-10 rounded-full" alt="Top candidate">
                    <div class="flex-1">
                        <p class="font-medium text-sm">Yassine Ziani</p>
                        <p class="text-xs text-gray-500">Product Manager</p>
                    </div>
                    <span class="text-yellow-500">⭐ 4.7</span>
                </div>
            </div>
        </div>

        <!-- Tips -->
        <div class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-xl p-6 border border-purple-100">
            <h3 class="text-lg font-bold text-gray-900 mb-2">💡 Astuce recrutement</h3>
            <p class="text-sm text-gray-700">
                Les offres avec des descriptions détaillées et des salaires transparents reçoivent 3x plus de candidatures qualifiées.
            </p>
        </div>
    </aside>
</div>

        </div>
    </div>
</body>
</html>