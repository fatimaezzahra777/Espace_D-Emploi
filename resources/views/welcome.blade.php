<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talentia - Plateforme de Recrutement</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-blue-600">Talentia</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 font-medium">Connexion</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Inscription</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-20 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Trouvez votre emploi idéal
            </h1>
            <p class="text-xl text-white mb-8 max-w-3xl mx-auto">
                Connectez talents et opportunités. La plateforme qui réunit recruteurs et chercheurs d'emploi.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-bold text-lg hover:shadow-xl">
                    Je cherche un emploi
                </a>
                <a href="{{ route('register') }}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600">
                    Je recrute
                </a>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-blue-600">10K+</div>
                    <div class="text-gray-600 mt-2">Offres d'emploi</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">50K+</div>
                    <div class="text-gray-600 mt-2">Candidats actifs</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">2K+</div>
                    <div class="text-gray-600 mt-2">Entreprises</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">95%</div>
                    <div class="text-gray-600 mt-2">Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Nos Fonctionnalités
                </h2>
                <p class="text-xl text-gray-600">
                    Tout ce dont vous avez besoin pour réussir
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Recherche Intelligente</h3>
                    <p class="text-gray-600">Trouvez rapidement les offres ou candidats qui vous correspondent.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">CV Professionnel</h3>
                    <p class="text-gray-600">Créez et gérez votre CV en ligne avec toutes vos compétences.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Réseau Professionnel</h3>
                    <p class="text-gray-600">Connectez-vous avec d'autres professionnels et développez votre réseau.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Gestion des Offres</h3>
                    <p class="text-gray-600">Publiez et gérez vos offres d'emploi facilement.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Notifications</h3>
                    <p class="text-gray-600">Recevez des alertes instantanées pour les nouvelles opportunités.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sécurité</h3>
                    <p class="text-gray-600">Vos données sont protégées avec une sécurité maximale.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Comment ça fonctionne
                </h2>
            </div>

            <!-- Pour les chercheurs -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-center mb-8 text-gray-800">Pour les Chercheurs d'emploi</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-blue-600">1</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Inscription</h4>
                        <p class="text-gray-600">Créez votre compte gratuitement</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Créez votre CV</h4>
                        <p class="text-gray-600">Ajoutez vos compétences</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-green-600">3</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Recherchez</h4>
                        <p class="text-gray-600">Trouvez les offres idéales</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-yellow-600">4</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Postulez</h4>
                        <p class="text-gray-600">Candidatez en un clic</p>
                    </div>
                </div>
            </div>

            <!-- Pour les recruteurs -->
            <div>
                <h3 class="text-2xl font-bold text-center mb-8 text-gray-800">Pour les Recruteurs</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-indigo-600">1</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Inscription</h4>
                        <p class="text-gray-600">Créez votre compte entreprise</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-pink-600">2</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Publiez</h4>
                        <p class="text-gray-600">Créez vos offres d'emploi</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-teal-600">3</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Recevez</h4>
                        <p class="text-gray-600">Consultez les candidatures</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-orange-600">4</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Recrutez</h4>
                        <p class="text-gray-600">Trouvez le candidat parfait</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">
                Prêt à commencer ?
            </h2>
            <p class="text-xl text-white mb-8">
                Rejoignez des milliers de professionnels sur Talentia
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-white text-blue-600 px-10 py-4 rounded-lg font-bold text-lg hover:shadow-xl">
                    Inscription Gratuite
                </a>
                <a href="{{ route('login') }}" class="bg-transparent border-2 border-white text-white px-10 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600">
                    Se Connecter
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company -->
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">Talentia</h3>
                    <p class="text-gray-400 mb-4">
                        La plateforme de recrutement qui connecte talents et opportunités.
                    </p>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Liens Rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Fonctionnalités</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Comment ça marche</a></li>
                        <li><a href="{{ route('register') }}" class="text-gray-400 hover:text-white">Inscription</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Aide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Confidentialité</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom -->
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2026 Talentia. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>