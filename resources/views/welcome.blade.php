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

<body class="bg-blue-100 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300 max-h-screen text-justify p-0 min-h-screen flex flex-col">
    <livewire:header />
    <main class="flex-1 w-4/5 m-auto mt-4">
        <p>Comment redonner vie à un arbre ? Comment faire renaître une plante ? C'est là toute la mission (certes, ambitieuse) de La Licorne Verte.</p>
        <p></p>

    </main>
    <livewire:footer />
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
</body>

</html>