<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-r from-blue-600 to-purple-600 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-lg bg-white rounded-2xl shadow-2xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">
                    Créez votre compte
                </h2>
                <p class="text-gray-600">
                    Rejoignez Talentia et trouvez votre opportunité
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Nom complet
                    </label>
                    <input id="name" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" 
                           type="text" 
                           name="name" 
                           value="{{ old('name') }}" 
                           required 
                           autofocus 
                           placeholder="Entrez votre nom complet">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Role -->
                <div>
                    <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">
                        Je suis
                    </label>
                    <select name="role" 
                            id="role" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition bg-white">
                        <option value="chercheur">Chercheur d'emploi</option>
                        <option value="recreteur">Recruteur</option>
                    </select>
                    @error('role')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email
                    </label>
                    <input id="email" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" 
                           type="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           placeholder="votre@email.com">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bio -->
                <div>
                    <label for="bio" class="block text-sm font-semibold text-gray-700 mb-2">
                        Bio
                    </label>
                    <textarea name="bio" 
                              id="bio" 
                              rows="3" 
                              class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" 
                              placeholder="Parlez-nous un peu de vous...">{{ old('bio') }}</textarea>
                    @error('bio')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Photo -->
                <div>
                    <label for="photo" class="block text-sm font-semibold text-gray-700 mb-2">
                        Photo de profil
                    </label>
                    <div class="mt-1 flex items-center justify-center w-full">
                        <label for="photo" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                </svg>
                                <p class="mb-1 text-sm text-gray-500"><span class="font-semibold">Cliquez pour uploader</span> ou glisser-déposer</p>
                                <p class="text-xs text-gray-500">PNG, JPG jusqu'à 10MB</p>
                            </div>
                            <input id="photo" 
                                   type="file" 
                                   name="photo" 
                                   class="hidden" 
                                   accept="image/*">
                        </label>
                    </div>
                    @error('photo')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Mot de passe
                    </label>
                    <input id="password" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" 
                           type="password" 
                           name="password" 
                           required 
                           placeholder="••••••••">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
                        Confirmer le mot de passe
                    </label>
                    <input id="password_confirmation" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" 
                           type="password" 
                           name="password_confirmation" 
                           required 
                           placeholder="••••••••">
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold py-3 px-6 rounded-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                        Créer mon compte
                    </button>
                </div>

                <!-- Already have account -->
                <div class="text-center pt-2">
                    <a href="{{ route('login') }}" 
                       class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                        Vous avez déjà un compte ? Se connecter
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>