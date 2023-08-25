<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || false }" :class="{ 'dark' : darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <title>{{config('app.name')}} - Accueil</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-fuchsia-50 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300 max-h-screen text-justify p-0 min-h-screen flex flex-col">
    <livewire:header />
    <main class="flex-1 w-4/5 m-auto md:min-h-fit min-h-screen border-l border-r border-x-gray-700 dark:border-x-gray-300 shadow-xl shadow-gray-700 dark:shadow-gray-300 dark:shadow">
        <p class="p-4 text-center w-2/3 m-auto text-xl"><q><em>La créativité est le langage de l'âme, exprimée à travers les mains qui transforment l'arbre en œuvre d'art, fusionnant la technicité du bois avec l'inspiration de la nature.</em></q></p>
        <div class="flex flex-row gap-4 p-4">
        <img class="flex-1 w-1/3 shadow-xl shadow-black hover:opacity-50 transition duration-300" src="{{asset('assets/equiphotel.jpg')}}" alt="equiphotel"> <img class="flex-1 w-1/3 shadow-xl shadow-black hover:opacity-50 transition duration-300" src="{{asset('assets/confidents/mercure.jpg')}}" alt="mercure"><img class="flex-1 w-1/3 shadow-xl shadow-black hover:opacity-50 transition duration-300" src="{{asset('assets/confidents/rouen.jpg')}}" alt="rouen">
        </div>

    </main>
    <livewire:footer />
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
</body>

</html>
