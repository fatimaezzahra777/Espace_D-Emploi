<section class="bg-white rounded-2xl shadow p-8">

    <header class="border-b pb-4 mb-6">
        <h2 class="text-xl font-semibold text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post"
          action="{{ route('profile.update') }}"
          class="mt-6 space-y-6"
          enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-gray-700" />
            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-2 block w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"
            />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Photo -->
        <div>
            <x-input-label for="photo" :value="__('photo')" class="text-gray-700" />
            <x-text-input
                id="photo"
                name="photo"
                type="file"
                class="mt-2 block w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500"
            />
            <x-input-error class="mt-2" :messages="$errors->get('photo')" />
        </div>

        <div>
            <x-input-label for="bio" :value="__('bio')" class="text-gray-700" />
            <textarea
                id="bio"
                name="bio"
                rows="3"
                class="mt-2 block w-full rounded-xl border-gray-300 shadow-sm
                       focus:border-blue-500 focus:ring-blue-500"
            >{{ old('bio', $user->bio) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('bio')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-2 block w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                :value="old('email', $user->email)"
                required
                autocomplete="username"
            />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3">
                    <p class="text-sm text-gray-600">
                        {{ __('Your email address is unverified.') }}

                        <button
                            form="send-verification"
                            class="ml-1 text-blue-600 hover:text-blue-700 underline font-medium"
                        >
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-4 border-t">
            <x-primary-button>
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-500"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>

    </form>
</section>
