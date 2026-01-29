<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans text-gray-900">

    <!-- Background -->
    <div class="min-h-screen flex flex-col justify-center items-center px-4
                bg-gradient-to-br from-purple-700 via-purple-600 to-indigo-700">

        <!-- Card -->
        <div class="w-full max-w-md
                    bg-white/95 backdrop-blur
                    rounded-3xl shadow-2xl
                    border border-white/20
                    px-8 py-10">

            <!-- Slot (Login / Register form) -->
            {{ $slot }}

        </div>

        <!-- Footer -->
        <footer class="mt-10 text-sm text-purple-100 text-center opacity-80">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }} — Tous droits réservés
        </footer>

    </div>

</body>
</html>
