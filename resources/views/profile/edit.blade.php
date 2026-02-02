<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto py-10 space-y-8">
        <div class="bg-white p-8 rounded-xl shadow">
            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="bg-white rounded-2xl shadow p-8">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="bg-white rounded-2xl shadow p-8">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white bg-gray-800 shadow sm:rounded-lg">
                <div class="bg-white rounded-2xl shadow p-8">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


        
  