<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || false }" :class="{ 'dark' : darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <title>{{config('app.name')}} - Galerie</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/carousel.js'])
    @livewireStyles
</head>
<body
    class="bg-fuchsia-50 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300 max-h-screen text-justify p-0 min-h-screen flex flex-col w-full">
<livewire:header/>
<main
    class="flex-1 md:w-4/5 w-full py-20 min-[400px]:py-5 m-auto md:min-h-fit border-l border-r border-x-gray-700 dark:border-x-gray-300 shadow-xl shadow-gray-700 dark:shadow-gray-300 dark:shadow flex justify-center">
<livewire:carousel/>
</main>
<livewire:footer/>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
