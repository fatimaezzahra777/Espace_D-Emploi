<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Chercheur - Talentia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    @include('chercheur.partials.navbar')


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 mb-8 text-white">
            <h1 class="text-3xl font-bold mb-2">Bienvenue, {{ auth()->user()->name }} !</h1>
            <p class="text-lg opacity-90">Prêt à trouver votre prochaine opportunité ?</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Candidatures</p>
                        <p class="text-3xl font-bold text-blue-600">12</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Vues profil</p>
                        <p class="text-3xl font-bold text-purple-600">48</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Connexions</p>
                        <p class="text-3xl font-bold text-green-600">156</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Nouvelles offres</p>
                        <p class="text-3xl font-bold text-yellow-600">24</p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Mes candidatures -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Mes candidatures récentes</h2>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b pb-4">
                            <div>
                                <h3 class="font-bold text-gray-900">Développeur Laravel</h3>
                                <p class="text-sm text-gray-600">WebAgency Pro</p>
                            </div>
                            <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm font-medium">En attente</span>
                        </div>

                        <div class="flex items-center justify-between border-b pb-4">
                            <div>
                                <h3 class="font-bold text-gray-900">Data Analyst</h3>
                                <p class="text-sm text-gray-600">Analytics Corp</p>
                            </div>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-medium">Vu</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-bold text-gray-900">Designer Graphique</h3>
                                <p class="text-sm text-gray-600">Creative Studio</p>
                            </div>
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium">Accepté</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Mon profil -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Mon Profil</h3>
                    <div class="text-center mb-4">
                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=3b82f6&color=fff&size=100" 
                             class="w-20 h-20 rounded-full mx-auto mb-3" 
                             alt="Profile">
                        <h4 class="font-bold text-gray-900">{{ auth()->user()->name }}</h4>
                        <p class="text-sm text-gray-600">Chercheur d'emploi</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Profil complété</span>
                            <span class="font-bold text-blue-600">75%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <a href="#" class="block w-full text-center bg-blue-600 text-white px-4 py-2 rounded-lg mt-4 hover:bg-blue-700 transition">
                        Modifier mon profil
                    </a>
                </div>

                <!-- Demandes d'amitié -->
                @forelse($friendRequests as $request)
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <img src="https://ui-avatars.com/api/?name={{ $request->name }}&background=10b981&color=fff" 
                             class="w-10 h-10 rounded-full" alt="User">
                        <div>
                            <p class="font-medium text-sm">{{ $request->name }}</p>
                            <p class="text-xs text-gray-500">Utilisateur</p>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <form method="POST" action="{{ route('friends.accept', $request->id) }}">
                            @csrf
                            <button class="bg-blue-600 text-white px-3 py-1 rounded text-xs hover:bg-blue-700">Accepter</button>
                        </form>
                        <form method="POST" action="{{ route('friends.reject', $request->id) }}">
                            @csrf
                            <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded text-xs hover:bg-gray-300">Refuser</button>
                        </form>
                    </div>
                </div>
                @empty
                <p class="text-gray-500">Aucune demande d'amitié.</p>
                @endforelse


                <!-- Tips -->
                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-6 border border-blue-100">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">💡 Conseil du jour</h3>
                    <p class="text-sm text-gray-700">
                        Complétez votre profil avec vos compétences et expériences pour augmenter vos chances d'être remarqué par les recruteurs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>