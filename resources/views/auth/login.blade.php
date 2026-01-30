<x-guest-layout>
    <div class="max-w-md w-full mx-auto bg-white rounded-2xl shadow-xl p-8">

            <h2 class="text-2xl font-bold text-center text-bleuçàhnvfffvuiokiuruitugrd' oriu-800 mb-2">
                Connexion
            </h2>

            <p class="text-center text-sm text-gray-500 mb-6">
                Accédez à votre espace Talentia
            </p>


        <form method="POST" action="{{ route('login') }}">
            @csrf

            

            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input class="mt-1 block w-full" type="email" name="email" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" value="Mot de passe" />
                <x-text-input class="mt-1 block w-full" type="password" name="password" />
            </div>

            <button
                class="mt-6 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                Se connecter
            </button>
        </form>
    </div>
</x-guest-layout>
