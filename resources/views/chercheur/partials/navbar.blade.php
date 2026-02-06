<nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-blue-600">Talentia</span>
                </div>

                <div class="flex items-center space-x-6">
                    <a href="{{ route('chercheur.dashboard') }}" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
                    <a href="{{ route('chercheur.job_offers.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Offres d'emploi</a>
                    <a href="{{ route('chercheur.profile.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Mon CV</a>
                    <a href="{{ route('chercheur.friends.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Réseau</a>
                    
                    <!-- Notifications -->
                    <button class="relative text-gray-700 hover:text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>

                    <!-- Profile -->
                    <div class="flex items-center space-x-2">
                        <img src="https://ui-avatars.com/api/?name=Chercheur&background=3b82f6&color=fff" 
                             class="w-8 h-8 rounded-full" 
                             alt="Profile">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-blue-600 font-medium">Déconnexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>