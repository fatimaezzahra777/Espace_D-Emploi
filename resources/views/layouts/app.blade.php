<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900">

    <!-- Global background -->
    <div class="min-h-screen bg-gradient-to-br from-purple-700 via-purple-600 to-indigo-700">

        <!-- Navigation -->
        <div class="bg-white/90 backdrop-blur shadow">
            @include('layouts.navigation')
        </div>

        <!-- Page Heading -->
        @isset($header)
            <header class="max-w-7xl mx-auto mt-6 px-4 sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="max-w-7xl mx-auto mt-6 px-4 sm:px-6 lg:px-8 pb-10">
            <div class="bg-white dark:bg-gray-900 rounded-3xl shadow-2xl p-6">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>
</html>
