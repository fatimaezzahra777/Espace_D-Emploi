<nav x-data="{ open: false }"
     class="bg-white/80 dark:bg-gray-900/80 backdrop-blur border-b border-purple-100 dark:border-gray-700 shadow-sm">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Left -->
            <div class="flex items-center gap-10">

                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-2 font-bold text-purple-700 dark:text-purple-400">
                    <x-application-logo class="h-9 w-auto fill-current" />
                    <span class="hidden sm:inline text-lg">
                        {{ config('app.name', 'Laravel') }}
                    </span>
                </a>

                <div class="hidden sm:flex items-center gap-6">
                    <x-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')"
                        class="text-gray-600 dark:text-gray-300 hover:text-purple-600">
                        Dashboard
                    </x-nav-link>
                </div>

            </div>

            <div class="hidden sm:flex sm:items-center">

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center gap-3 px-3 py-2 rounded-xl
                                   bg-purple-50 dark:bg-gray-800
                                   hover:bg-purple-100 dark:hover:bg-gray-700
                                   transition">

                            <!-- Avatar -->
                            <div class="h-8 w-8 rounded-full bg-gradient-to-br from-purple-600 to-fuchsia-600
                                        flex items-center justify-center text-white font-semibold">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>

                            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">
                                {{ Auth::user()->name }}
                            </span>

                            <svg class="h-4 w-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                             Profil
                        </x-dropdown-link>

                        <div class="border-t border-gray-100 my-1"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                 Déconnexion
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>

            </div>

            <div class="flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="p-2 rounded-lg text-purple-600 hover:bg-purple-100 transition">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open }" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open }" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <div x-show="open" x-transition
         class="sm:hidden bg-white dark:bg-gray-900 border-t border-purple-100">

        <div class="px-4 pt-4 pb-3 space-y-2">
            <x-responsive-nav-link :href="route('dashboard')">
                Dashboard
            </x-responsive-nav-link>
        </div>

        <div class="border-t border-gray-200 px-4 py-4">
            <div class="text-sm font-medium text-gray-800 dark:text-gray-200">
                {{ Auth::user()->name }}
            </div>
            <div class="text-xs text-gray-500">
                {{ Auth::user()->email }}
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    Profil
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link
                        :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Déconnexion
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
