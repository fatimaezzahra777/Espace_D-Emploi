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

<body class="font-sans bg-white-200 from-gray-100 to-gray-200 from-gray-900 to-gray-800 text-gray-900 text-gray-100">

    <div class="min-h-screen flex flex-col justify-center items-center ">

        <!-- Card -->
        <div class="  bg-white bg-gray-900 rounded-2xl shadow-xl border border-gray-100 border-gray-700 px-8 py-10">

            <!-- Slot (Login / Register form) -->
            {{ $slot }}

        </div>

        <!-- Footer -->
        <footer class="mt-10 text-sm text-gray-500 text-gray-400 text-center">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}.  
            Tous droits réservés.
        </footer>

    </div>

</body>
</html>
