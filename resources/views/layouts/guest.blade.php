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

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#7C3AED',
                        secondary: '#A855F7'
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans bg-gradient-to-br from-purple-700 via-purple-600 to-fuchsia-600 text-white">

    <div class="min-h-screen flex items-center justify-center px-4">

        <!-- Main Card -->
        <div class="w-full max-w-md bg-white text-gray-900 rounded-3xl shadow-2xl px-8 py-10 relative overflow-hidden">

            <!-- Decorative gradient circle -->
            <div class="absolute -top-20 -right-20 w-48 h-48 bg-gradient-to-br from-purple-500 to-fuchsia-500 rounded-full opacity-20"></div>

            <!-- Header -->
            <div class="relative mb-8 text-center">
                <h1 class="text-2xl font-bold text-purple-700">
                    Accédez à votre espace
                </h1>
                <p class="text-sm text-gray-500 mt-2">
                    Construisez votre avenir professionnel 🚀
                </p>
            </div>

            <!-- Slot (Login / Register) -->
            <div class="relative">
                {{ $slot }}
            </div>

            <!-- CTA -->
            <div class="mt-8">
                <button class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-fuchsia-600 text-white font-semibold hover:opacity-90 transition">
                    Continuer
                </button>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-10 text-center text-sm text-purple-100 opacity-80">
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }} — Tous droits réservés.
    </footer>

</body>
</html>
