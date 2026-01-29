<x-guest-layout>
    <div class="w-full max-w-lg mx-auto bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-900 dark:text-white mb-8">
            Create your account 
        </h2>

        <form method="POST"
              action="{{ route('register') }}"
              enctype="multipart/form-data"
              class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" value="Name"/>
                <x-text-input id="name"
                              class="block w-full mt-1"
                              type="text"
                              name="name"
                              :value="old('name')"
                              required autofocus/>
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <!-- Role -->
            <div>
                <x-input-label for="role" value="Role"/>
                <select name="role" id="role"
                        class="block w-full mt-1 rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="chercheur">Chercheur d'emploi</option>
                    <option value="recruteur">Recruteur</option>
                </select>
                <x-input-error :messages="$errors->get('role')" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" value="Email"/>
                <x-text-input id="email"
                              class="block w-full mt-1"
                              type="email"
                              name="email"
                              :value="old('email')"
                              required/>
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Bio -->
            <div>
                <x-input-label for="bio" value="bio"/>
                <textarea name="bio" id="bio" rows="3"
                          class="block w-full mt-1 rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:ring-indigo-500 focus:border-indigo-500"
                          placeholder="Parlez un peu de vous...">{{ old('bio') }}</textarea>
                <x-input-error :messages="$errors->get('bio')" />
            </div>

            <!-- Photo -->
            <div>
                <x-input-label for="photo" value="photo"/>
                <input type="file"
                       name="photo"
                       id="photo"
                       class="block w-full mt-1 text-sm text-gray-700 dark:text-gray-300
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-lg file:border-0
                              file:text-sm file:font-semibold
                              file:bg-indigo-50 file:text-indigo-700
                              hover:file:bg-indigo-100"/>
                <x-input-error :messages="$errors->get('photo')" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" value="Password"/>
                <x-text-input id="password"
                              class="block w-full mt-1"
                              type="password"
                              name="password"
                              required/>
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" value="Confirm Password"/>
                <x-text-input id="password_confirmation"
                              class="block w-full mt-1"
                              type="password"
                              name="password_confirmation"
                              required/>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between pt-4">
                <a href="{{ route('login') }}"
                   class="text-sm text-gray-600 dark:text-gray-400 hover:underline">
                    Already registered?
                </a>

                <x-primary-button class="px-6 py-2 text-base">
                    Register
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
