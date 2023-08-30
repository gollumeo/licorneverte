<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || false }" :class="{ 'dark' : darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <title>{{config('app.name')}} - Contact & Devis</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-fuchsia-50 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300 max-h-screen text-justify p-0 min-h-screen flex flex-col">
    <livewire:header />
    <main class="flex-1 w-4/5 m-auto md:min-h-fit min-h-screen border-l border-r border-x-gray-700 dark:border-x-gray-300 shadow-xl shadow-gray-700 dark:shadow-gray-300 dark:shadow">
        <p class="">Travail sur commande et sur-mesure</p>
        <p class="">Visites sur rendez-vous</p>
        <p>La Licorne Verte, M-H Diffusion</p>
        <p>75 Rue Etienne Olry - 54170 Allain</p>
        <p>03 83 52 09 50</p>
        <p>06 11 17 04 74</p>
        <p><x-bi-facebook class="text-lg" /></p>
        <p>📧 email</p>
    </main>
    <livewire:footer />
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
</body>

</html>