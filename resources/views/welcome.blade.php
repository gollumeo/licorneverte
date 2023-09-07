<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || false }" :class="{ 'dark' : darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <title>{{config('app.name')}} - Accueil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body
    class="bg-fuchsia-50 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300 text-justify p-0 flex flex-col">
<livewire:header/>
<main
    class="flex-1 w-full  border-none lg:w-4/5 m-auto xl:border-l xl:border-r xl:border-x-gray-700 dark:border-x-gray-300 shadow-xl shadow-gray-700 dark:shadow-gray-300 dark:shadow">
    <p class="p-4 text-center w-full lg:w-2/3 m-auto text-sm lg:text-xl"><q><em>La créativité est le langage de l'âme,
                exprimée à
                travers les
                mains qui transforment l'arbre en œuvre d'art, fusionnant la technicité du bois avec l'inspiration de la
                nature.</em></q></p>
    <div
        class="flex flex-row justify-center items-center xl:items-stretch gap-4 w-full xl:flex-row xl:justify-center border-4 border-red-300 h-screen">
        <div class="flex flex-col items-center justify-center gap-4 w-full border-2 border-black">
            <img
                class="flex-1 w-full xl:w-1/4 shadow-xl shadow-black xl:hover:scale-105 transition duration-500"
                src="{{asset('assets/equiphotel.jpg')}}" alt="equiphotel">
            <a href="{{route('savoir-faire')}}"
               class="flex-1 w-full text-center text-xl hover:text-violet-700 transition duration-500 dark:hover:text-blue-300 xl:hidden inline">Savoir-faire</a>
        </div>
        <div class="flex flex-col items-center justify-center gap-4 w-full">
            <img
                class="flex-1 w-full xl:w-1/4 shadow-xl shadow-black xl:hover:scale-105 transition duration-300"
                src="{{asset('assets/confidents/mercure.jpg')}}" alt="mercure">
            <a href="{{route('galerie')}}"
               class="flex-1 w-full text-center text-xl hover:text-violet-700 transition duration-500 dark:hover:text-blue-300 xl:hidden">Galerie</a>
        </div>
        <div class="flex flex-col items-center justify-center gap-4 w-full">
            <img
                class="flex-1 w-full xl:w-1/4 shadow-xl shadow-black xl:hover:scale-105 transition duration-300"
                src="{{asset('assets/confidents/rouen.jpg')}}" alt="rouen">
            <a href="{{route('contact')}}"
               class="flex-1 w-full text-center text-xl hover:text-violet-700 transition duration-500 dark:hover:text-blue-300 xl:hidden">Contact</a>
        </div>
    </div>

</main>
<livewire:footer/>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
</body>

</html>
