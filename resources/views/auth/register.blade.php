<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center
                bg-gradient-to-br from-purple-700 via-purple-600 to-indigo-700 px-6">

        <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8">

            <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-2">
                Crée ton compte
            </h2>

            <p class="text-center text-gray-500 mb-6">
                Commence ta nouvelle carrière dès maintenant 
            </p>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div>
                    <x-input-label for="name" value="Nom complet" />
                    <x-text-input id="name"
                        class="mt-1 w-full rounded-xl"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </div>

                <div>
                    <x-input-label for="role" value="Rôle" />
                    <select name="role" id="role"
                        class="mt-1 w-full rounded-xl border-gray-300 focus:border-purple-500 focus:ring-purple-500">
                        <option value="chercheur">Chercheur d'emploi</option>
                        <option value="recruteur">Recruteur</option>
                    </select>
                </div>

                <div>
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email"
                        class="mt-1 w-full rounded-xl"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <div>
                    <x-input-label for="password" value="Mot de passe" />
                    <x-text-input id="password"
                        class="mt-1 w-full rounded-xl"
                        type="password"
                        name="password"
                        required />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <div>
                    <x-input-label for="password_confirmation" value="Confirmer le mot de passe" />
                    <x-text-input id="password_confirmation"
                        class="mt-1 w-full rounded-xl"
                        type="password"
                        name="password_confirmation"
                        required />
                </div>

                <button
                    class="w-full mt-4 py-3 rounded-full
                           bg-green-400 hover:bg-green-500
                           text-purple-900 font-bold text-lg transition">
                    S'inscrire
                </button>

                <p class="text-center text-sm text-gray-500 mt-4">
                    Déjà inscrit ?
                    <a href="{{ route('login') }}"
                       class="text-purple-600 font-semibold hover:underline">
                        Se connecter
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
