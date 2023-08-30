<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || false }" :class="{ 'dark' : darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <script src="https://kit.fontawesome.com/0e39d36e41.js" crossorigin="anonymous"></script>
    <title>{{config('app.name')}} - Contact & Devis</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-fuchsia-50 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300 max-h-screen text-justify p-0 min-h-screen flex flex-col">
    <livewire:header />
    <main class="flex-1 w-4/5 m-auto md:min-h-fit min-h-screen border-l border-r border-x-gray-700 dark:border-x-gray-300 shadow-xl shadow-gray-700 dark:shadow-gray-300 dark:shadow text-center flex flex-row justify-around">
        <div class="flex flex-1 flex-col justify-around">
            <div class="text-lg">
                <p>Travail sur commande et sur-mesure</p>
                <p>Visites sur rendez-vous</p>
            </div>
            <p><i class="fa-solid fa-leaf fa-xl text-emerald-600 dark:text-emerald-400"></i></p>
            <div>
                <p>La Licorne Verte, M-H Diffusion</p>
                <p>75 Rue Etienne Olry - 54170 Allain</p>
            </div>
            <p><i class="fa-solid fa-leaf fa-xl text-emerald-600 dark:text-emerald-400"></i></p>
            <div>
                <p>03 83 52 09 50</p>
                <p>06 11 17 04 74</p>
            </div>
            <p><i class="fa-solid fa-leaf fa-xl text-emerald-600 dark:text-emerald-400"></i></p>
            <a target="_blank" class="dark:hover:text-blue-300 hover:text-violet-700 transition duration-300 hover:scale-110" href="https://www.facebook.com/lalicorneverte"><i class="fa-brands fa-facebook fa-xl mr-0.5"></i>acebook</a>
            <p><i class="fa-solid fa-leaf fa-xl text-emerald-600 dark:text-emerald-400"></i></p>
            <a class="dark:hover:text-blue-300 hover:text-violet-700 transition duration-300 hover:scale-110" href="mailto:lalicorneverte@wanadoo.fr"><span class="mr-0.5">lalicorneverte</span><i class="fa-solid fa-at fa-xl mr-0.5"></i>wanadoo.fr</p></a>
        </div>
        <iframe class="w-1/2 flex-1 mr-5 my-5 rounded-xl shadow shadow-black" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10564.164121710175!2d5.912453!3d48.551607000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479357c663cb5ce3%3A0x686bcab9daf697e1!2s75%20Rue%20Etienne%20Olry%2C%2054170%20Allain%2C%20France!5e0!3m2!1sfr!2sus!4v1693430864629!5m2!1sfr!2sus"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>
    <livewire:footer />
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
</body>

</html>