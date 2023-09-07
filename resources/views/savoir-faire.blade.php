<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || false }" :class="{ 'dark' : darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <title>{{config('app.name')}} - Savoir-faire</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-fuchsia-50 text-gray-700 antialiased dark:bg-slate-800 dark:text-gray-300 max-h-screen text-justify p-0 min-h-screen flex flex-col">
    <livewire:header />
    <main class="flex-1 w-4/5 m-auto md:min-h-fit min-h-screen border-l border-r border-x-gray-700 dark:border-x-gray-300 shadow-xl shadow-gray-700 dark:shadow-gray-300 dark:shadow">
        <div class="flex flex-col-reverse xl:flex-row items-center justify-center pr-4">
            <div>
                <p class="p-4">Les ateliers de <strong>La Licorne Verte</strong> incarnent une idée à la fois <em>simple</em> et <em>audacieuse</em> : recréer la vie végétale. Comment peut-on redonner vie à un arbre ? Comment faire renaître une plante ?</p>
                <p class="p-4">Pour relever ce défi, ces ateliers ont dû développer leurs propres <em>techniques</em>, forger leur savoir-faire <em>unique</em>, et créer une tradition qui prend la nature comme seule source <em>d'inspiration</em>.</p>
                <p class="p-4">Le processus commence par une exploration de la forêt à la recherche d'arbres qui ne suscitent aucun intérêt pour l'industrie. Ce sont ceux dont les troncs sont trop tordus et les branches trop sinueuses. Ces arbres <em>fascinants</em> par leurs formes <em>expressives</em>, racontant leurs histoires immobiles face au vent, aux orages et aux tempêtes, dans leur quête inlassable de lumière.</p>
                <p class="p-4">Ensuite, l'intervention de l'Homme entre en jeu pour insuffler une nouvelle vie à ce bois inerte en greffant soigneusement des rameaux artificiels.</p>
                <p class="p-4">Au-delà du réalisme des matériaux utilisés, ce sont les gestes qui parviennent à <strong>capter l'essence de la nature</strong>, à travers son <em>mouvement</em> et son <em>équilibre</em>.</p>
                <p class="p-4">La technique des ateliers de <strong>La Licorne Verte</strong> est si <em>subtile</em> qu'elle se fond parfaitement dans le paysage. On se demanderait même si ces créations ne sont pas l'œuvre de la nature elle-même.</p>
                <p class="p-4">C'est cette capacité à donner <em>vie</em> qui attire aujourd'hui les artistes plasticiens, les chorégraphes et les architectes à collaborer avec les ateliers de <strong>La Licorne Verte</strong>, offrant des opportunités créatives des plus stimulantes.</p>
                <p class="p-4">Cependant, ces ateliers ne se contentent pas de maîtriser cette technique ; ils aiment aussi la détourner avec <em>audace</em> et <em>légèreté</em>. Dans cet esprit, ils créent des œuvres <em>étonnantes</em> : arbres dorés ou colorés, sur lesquels poussent des petits messages, des pommes de cristal ou des parapluies. Ces créations <em>uniques</em>, nées de l'imagination de leurs concepteurs, prennent forme avec une aisance déconcertante.</p>
            </div>
            <div class="rounded-xl xl:mb-28 flex flex-col items-center justify-center mt-4 w-4/5">
                <h2 class="text-center text-5xl text-slate-700 bg-fuchsia-100 dark:bg-gray-400 shadow-xl shadow-gray-400 py-4 rounded-2xl w-2/3 mx-auto dark:shadow dark:shadow-gray-400 dark:text-slate-800">Savoir-faire</h2>
                <img class="shadow-2xl shadow-black mt-12 dark:shadow-gray-300 dark:shadow-none text-center" src="{{asset('assets/portrait.jpg')}}" alt="Hervé Mayon">
            </div>
        </div>

    </main>
    <livewire:footer />
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
</body>

</html>
