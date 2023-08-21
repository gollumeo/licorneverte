<div>
    <footer class="w-full border-t border-t-gray-700 md:min-h-12 bg-blue-200 dark:bg-gray-700 dark:border-b-gray-300 flex text-sm flex-col gap-4 content-center">

        <div class="flex flex-row w-full items-center content-center m-auto">
            <img src="{{asset('assets/luxe.png')}}" class="w-2/12 left-0" />
            <div class="p-4 flex-1">
                <p class="font-semibold">SARL M. H. DIFFUSION</p>
                <p>Créée en 1987 par Joëlle & Hervé Mayon</p>
                <p>Réception uniquement sur rendez-vous</p>
            </div>
            <div class="p-4 flex-1">
                <p>75 rue Etienne Olry - 54170 Allain - France</p>
                <p>+33 (0) 3 83 52 09 50 / +33 (0) 6 11 17 04 74</p>
                <p><a class="underline dark:hover:text-blue-300 hover:text-blue-900 transition duration-300 hover:scale-110" href="mailto:lalicorneverte@wanadoo.fr">lalicorneverte@wanadoo.fr</a>
            </div>
            <div class="p-4 flex-1 self-center place-self-center">
                <p>SIRET: 341 734 473 000 26</p>
                <p>TVA: FR52 341 734 473</p>
            </div>
            <img src="{{asset('assets/epv_full.png')}}" class="w-1/5" />
        </div>



        <div class="flex flex-col gap-0">
            <p class="text-center italic text-xs">&copy; Pierre Mauriello pour le compte de La Licorne Verte</p>
            <p class="text-center italic mb-2 text-xs">2023 - {{ date('Y') }}</p>
        </div>
    </footer>

</div>