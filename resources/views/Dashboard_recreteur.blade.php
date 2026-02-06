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
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Offres actives</p>
                        <p class="text-3xl font-bold text-blue-600">8</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Candidatures</p>
                        <p class="text-3xl font-bold text-purple-600">127</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Nouvelles</p>
                        <p class="text-3xl font-bold text-green-600">32</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium">Embauches</p>
                        <p class="text-3xl font-bold text-yellow-600">5</p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Mes offres actives -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Mes offres actives</h2>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Gérer tout</a>
                    </div>

                    <div class="space-y-4">
                        <!-- Offre 1 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="font-bold text-lg text-gray-900">Développeur Full Stack</h3>
                                    <p class="text-gray-600 text-sm">CDI • Casablanca • Publié il y a 2 jours</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex space-x-4 text-sm">
                                    <span class="flex items-center text-gray-600">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        248 vues
                                    </span>
                                    <span class="flex items-center text-blue-600 font-medium">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        45 candidatures
                                    </span>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Voir les candidats →</a>
                            </div>
                        </div>

                        <!-- Offre 2 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="font-bold text-lg text-gray-900">Chef de Projet Digital</h3>
                                    <p class="text-gray-600 text-sm">Freelance • Remote • Publié il y a 5 jours</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex space-x-4 text-sm">
                                    <span class="flex items-center text-gray-600">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        156 vues
                                    </span>
                                    <span class="flex items-center text-blue-600 font-medium">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        28 candidatures
                                    </span>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Voir les candidats →</a>
                            </div>
                        </div>

                        <!-- Offre 3 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="font-bold text-lg text-gray-900">UX/UI Designer</h3>
                                    <p class="text-gray-600 text-sm">CDD • Rabat • Publié il y a 1 semaine</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex space-x-4 text-sm">
                                    <span class="flex items-center text-gray-600">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        321 vues
                                    </span>
                                    <span class="flex items-center text-blue-600 font-medium">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        54 candidatures
                                    </span>
                                </div>
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">Voir les candidats →</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nouvelles candidatures -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Nouvelles candidatures</h2>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b pb-4">
                            <div class="flex items-center space-x-4">
                                <img src="https://ui-avatars.com/api/?name=Amina+Hassan&background=3b82f6&color=fff" 
                                     class="w-12 h-12 rounded-full" 
                                     alt="Candidate">
                                <div>
                                    <h3 class="font-bold text-gray-900">Amina Hassan</h3>
                                    <p class="text-sm text-gray-600">Développeur Full Stack • 5 ans d'expérience</p>
                                    <p class="text-xs text-gray-500 mt-1">Postulé pour: Développeur Full Stack</p>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-sm">Voir CV</button>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-sm">Accepter</button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between border-b pb-4">
                            <div class="flex items-center space-x-4">
                                <img src="https://ui-avatars.com/api/?name=Omar+Alami&background=8b5cf6&color=fff" 
                                     class="w-12 h-12 rounded-full" 
                                     alt="Candidate">
                                <div>
                                    <h3 class="font-bold text-gray-900">Omar Alami</h3>
                                    <p class="text-sm text-gray-600">Chef de Projet • 7 ans d'expérience</p>
                                    <p class="text-xs text-gray-500 mt-1">Postulé pour: Chef de Projet Digital</p>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-sm">Voir CV</button>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-sm">Accepter</button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <img src="https://ui-avatars.com/api/?name=Sophia+Idrissi&background=10b981&color=fff" 
                                     class="w-12 h-12 rounded-full" 
                                     alt="Candidate">
                                <div>
                                    <h3 class="font-bold text-gray-900">Sophia Idrissi</h3>
                                    <p class="text-sm text-gray-600">UX/UI Designer • 4 ans d'expérience</p>
                                    <p class="text-xs text-gray-500 mt-1">Postulé pour: UX/UI Designer</p>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-sm">Voir CV</button>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-sm">Accepter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Actions rapides -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Actions rapides</h3>
                    <div class="space-y-3">
                        <button class="w-full bg-blue-600 text-white px-4 py-3 rounded-lg hover:bg-blue-700 transition flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            Créer une offre
                        </button>
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
                            <img src="https://ui-avatars.com/api/?name=Karim+Amrani&background=f59e0b&color=fff" 
                                 class="w-10 h-10 rounded-full" 
                                 alt="Top candidate">
                            <div class="flex-1">
                                <p class="font-medium text-sm">Karim Amrani</p>
                                <p class="text-xs text-gray-500">Développeur Senior</p>
                            </div>
                            <span class="text-yellow-500">⭐ 4.9</span>
                        </div>

                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=Leila+Bennis&background=ec4899&color=fff" 
                                 class="w-10 h-10 rounded-full" 
                                 alt="Top candidate">
                            <div class="flex-1">
                                <p class="font-medium text-sm">Leila Bennis</p>
                                <p class="text-xs text-gray-500">Data Scientist</p>
                            </div>
                            <span class="text-yellow-500">⭐ 4.8</span>
                        </div>

                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=Yassine+Ziani&background=06b6d4&color=fff" 
                                 class="w-10 h-10 rounded-full" 
                                 alt="Top candidate">
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
            </div>
        </div>
    </div>
</body>
</html>