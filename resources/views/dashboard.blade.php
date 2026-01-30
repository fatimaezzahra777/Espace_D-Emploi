<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="p-8 text-gray-700 flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            Welcome back
                        </p>

                        <p class="mt-1 text-lg font-semibold text-gray-900">
                            {{ __("You're logged in!") }}
                        </p>
                    </div>

                    <div class="hidden sm:flex items-center justify-center w-12 h-12 rounded-xl bg-blue-50 text-blue-600">
                        <!-- simple icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0h4"/>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
