<x-guest-layout>
    <div class="w-full max-w-md mx-auto bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 text-center mb-6">
            {{ __('Register') }}
        </h2>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="block text-gray-700 dark:text-gray-200 mb-1"/>
                <x-text-input id="name" class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-500 text-sm" />
            </div>

            <!-- Role -->
            <div>
                <label for="role" class="block text-gray-700 dark:text-gray-200 mb-1">Role</label>
                <select name="role" id="role" class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="chercheur">Chercheur d'emploi</option>
                    <option value="recruteur">Recruteur</option>
                </select>
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="block text-gray-700 dark:text-gray-200 mb-1"/>
                <x-text-input id="email" class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-sm" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="block text-gray-700 dark:text-gray-200 mb-1"/>
                <x-text-input id="password" class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500 text-sm" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-gray-700 dark:text-gray-200 mb-1"/>
                <x-text-input id="password_confirmation" class="block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-500 text-sm" />
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-between mt-4">
                <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 underline" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-md">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
