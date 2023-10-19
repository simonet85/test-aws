<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        .bg-custom {
            background-image: url('img/hero-image.jpg');
            background-size: cover;
            background-position: center;
        }

    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-custom">

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        {{-- <img src="{{asset('img/hero-image.jpg')}}" alt=""> --}}
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:left-0 p-6 z-10">
            <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">AWS TEST</a>
        </div>
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            {{-- Dashboard  --}}
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>


            @else


            <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Connexion</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">S'enregister</a>

            @endif
            @endauth
        </div>
        @endif

        <div class="flex justify-center flex-col items-center min-h-screen text-white">
            <h1 class="text-center text-5xl font-extrabold">
                Bienvenue dans l'application de gestion des auditeurs
            </h1> <br>
            <p>Connectez-vous pour voir les auditeurs enregistrés !</p>
            <a href="{{route('login')}}" class="text-slate-900 bg-slate-200 p-2 mt-4 rounded-md">Connexion</a>
        </div>


    </div>


</body>
</html>
