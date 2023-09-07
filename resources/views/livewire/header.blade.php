<div
    class="w-full border-b border-b-gray-700 sticky bg-fuchsia-100 dark:bg-gray-700 dark:text-gray-300 dark:border-b-gray-300 flex">
    <ul class="flex flex-col justify-around items-center font-body fixed top-0 left-0 w-screen h-screen bg-fuchsia-100/90 text-gray-700 dark:text-gray-300 dark:bg-gray-700/90 backdrop-blur-sm translate-x-full text-2xl transition-transform duration-300" id="menu-mobile">
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-2 right-8 fill-gray-700 dark:fill-gray-300" id="cross" width="42" height="42" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M0 14.545 1.455 16 8 9.455 14.545 16 16 14.545 9.455 8 16 1.455 14.545 0 8 6.545 1.455 0 0 1.455 6.545 8z"/></svg>
        <li>
            <a class="{{ request()->routeIs('/') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
               href="{{route('/')}}">Accueil</a></li>
        <li>
            <a class="{{ request()->routeIs('savoir-faire') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
               href="{{route('savoir-faire')}}">Savoir-faire</a></li>
        <li>
            <a class="{{ request()->routeIs('galerie') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
               href="{{route('galerie')}}">Galerie</a></li>
        <li>
            <a class="{{ request()->routeIs('references') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
               href="{{route('references')}}">Références</a></li>
        <li>
            <a class="{{ request()->routeIs('destock') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
               href="{{route('destock')}}">Destock</a></li>
        <li>
            <a class="{{ request()->routeIs('contact') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
               href="{{route('contact')}}">Contact & Devis</a></li>
        <label for="theme" class="flex-row items-center justify-center hover:cursor-pointer p-4 flex w-1/5">
            <svg class="w-8 dark:fill-amber-200 fill-amber-700 " xmlns="http://www.w3.org/2000/svg"
                 xml:space="preserve" viewBox="0 0 207.628 207.628">
                <circle cx="103.814" cy="103.814" r="45.868"/>
                <path
                    d="M103.814 157.183c-29.427 0-53.368-23.941-53.368-53.368s23.941-53.368 53.368-53.368 53.368 23.941 53.368 53.368-23.941 53.368-53.368 53.368zm0-91.737c-21.156 0-38.368 17.212-38.368 38.368s17.212 38.368 38.368 38.368 38.368-17.212 38.368-38.368-17.212-38.368-38.368-38.368zM103.814 39.385a7.5 7.5 0 0 1-7.5-7.5V7.5a7.5 7.5 0 0 1 15 0v24.385a7.5 7.5 0 0 1-7.5 7.5zM103.814 207.628a7.5 7.5 0 0 1-7.5-7.5v-24.385a7.5 7.5 0 0 1 15 0v24.385a7.5 7.5 0 0 1-7.5 7.5zM200.128 111.314h-24.385a7.5 7.5 0 0 1 0-15h24.385a7.5 7.5 0 0 1 0 15zM31.885 111.314H7.5a7.5 7.5 0 0 1 0-15h24.385a7.5 7.5 0 0 1 0 15zM154.676 60.452a7.474 7.474 0 0 1-5.303-2.197 7.5 7.5 0 0 1 0-10.606l17.243-17.242a7.498 7.498 0 0 1 10.606 0 7.5 7.5 0 0 1 0 10.606l-17.243 17.242a7.474 7.474 0 0 1-5.303 2.197zM35.709 179.419a7.474 7.474 0 0 1-5.303-2.197 7.5 7.5 0 0 1 0-10.606l17.243-17.243a7.5 7.5 0 0 1 10.606 0 7.5 7.5 0 0 1 0 10.606l-17.243 17.243a7.472 7.472 0 0 1-5.303 2.197zM171.918 179.419a7.474 7.474 0 0 1-5.303-2.197l-17.243-17.243a7.5 7.5 0 0 1 0-10.606 7.5 7.5 0 0 1 10.606 0l17.243 17.243a7.5 7.5 0 0 1 0 10.606 7.472 7.472 0 0 1-5.303 2.197zM52.952 60.452a7.474 7.474 0 0 1-5.303-2.197L30.406 41.013a7.5 7.5 0 0 1 0-10.606 7.498 7.498 0 0 1 10.606 0l17.243 17.242a7.5 7.5 0 0 1 0 10.606 7.472 7.472 0 0 1-5.303 2.197z"/>
            </svg>
            <span class="sr-only">Toggle</span>
            <button id="theme" name="theme"
                    x-on:click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode.toString());"
                    x-bind:class="darkMode ? 'after:translate-x-5' : 'after:translate-x-0'"
                    class="dark:bg-gray-300 w-12 h-7 rounded-full flex flex-shrink-0 items-center dark:after:bg-slate-900 bg-gray-700 after:bg-blue-100 after:w-5 after:h-5 after:rounded-full p-1 ease-in-out duration-500 after:ease-in-out after:duration-500 ml-4 mr-4">
            </button>
            <svg class="w-8 dark:fill-gray-300 fill-slate-700" xmlns="http://www.w3.org/2000/svg"
                 xml:space="preserve" viewBox="0 0 30.457 30.457">
                <path
                    d="M29.693 14.49a1.18 1.18 0 0 0-1.32.353 9.37 9.37 0 0 1-7.27 3.446c-5.183 0-9.396-4.216-9.396-9.397a9.3 9.3 0 0 1 2.963-6.835 1.18 1.18 0 0 0 .264-1.343A1.171 1.171 0 0 0 13.75.03 15.172 15.172 0 0 0 0 15.194c0 8.402 6.836 15.238 15.238 15.238 8.303 0 14.989-6.506 15.219-14.812a1.169 1.169 0 0 0-.764-1.13z"/>
            </svg>
        </label>
    </ul>
    <nav class="w-full m-auto flex flex-row items-center md:justify-evenly justify-end">
        <div class="p-4 flex flex-row items-center w-screen lg:w-1/5 justify-between">
            <a href="{{route('/')}}" class="flex flex-row">
                <h1 class="lg:my-auto text-2xl md:text-base xl:text-2xl hidden min-[400px]:flex">La Licorne Verte</h1>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                     class="w-8 h-8 fill-blue-300 stroke-blue-300">
                            <image
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAxdJREFUWEedV4tVGzEQnO2AdAAdmA5wB6aD0AGpALsCkgoMFYQOoIPQQejA7kB5o+9KWunO0eM9zqffaHZ2tCco7S+ADwA/AJzV+xWPAsCtGNcPETV1A8F7XOcBwNt/rXjhJA2AU68AvAPYRDYI5Gu+ZjpCw8IKUjhE/F+iLzwSxG8I7uB8KH4JsB8RvGKfKX7Oj61b6gjge+z8BPAAwWeN9UK+jeERgEDglIwymEcInlXHTwAHQM6RtethiBhcNxamDlzA1RJQfpMFspHGUBPUBjPmTwTwCsjbcib0AQsMLAeSoqQ4qY/UmCUE86jeERTfHSxmWp7T1jYDfbwIgkzwf2oUqQalTiMHwO0tlejzKhGuElRMU9nUmhnOpWZobHVj7rkQsDkAWxcE8awyZAn5PU2tLFU/rWQgTMpTBVdwOPUWUrAo7F8C3Mx8ZJCdU2/febPqmYXrfM0PYta8jPTQi9DKimphuXNwzIrcgsIZU+dB+OEFDTOGobDksBTClCyKEcERLrvkqjwuts/1wlrxLlgDoDrqDm5Av3k+l3zmFgAtvWq9COeXGjOAdUOT+5YYOn/bQvDRlg3TLPBYKkCyB9yTHcmU1bV41fStAB+ttD2AqRPXnTw9L6ARhjMgVz7Gymzi4G24PyhXjig6GB+o7zn5DZKNhX5fM8Q0Y3rSpEqrfSeLLzFhhsC6s6L16hohbaLFRW/YGZzygrrp5RfM7ZKWbJgnPUPwCod04bDvVEKq7z5/VQcfaG6iBkD8WVMcAE6F4gfsIe7JUrmT4oR56Viw2ACqVeydmwzhFc3ipGl57jcyljbTmTAJgbGxtULwBG4esqOf9oLAgFkwdQDsPdK6afW8y0aAo6uLlBiyXBNSfMPSfsDA4PS1i+wQ7gTDFfN8lmalKmoEGO1irrEaineXazhhru/q74nOeej7t53sG5WONdCRkF9YXuD9LRf2/H4AtvywMQ7d+ZTlWkveQMFFFrqhjPe9CD7LZ4FlbZOasB0+sQAaEhlJOggnr76uy+zCkn63dNblfrJBC+adQLe76NP+H52TBDT+gkngAAAAAElFTkSuQmCC"
                                width="32" height="32"/>
            </a>

            <svg id="burger" xmlns="http://www.w3.org/2000/svg" class="w-8 lg:hidden dark:stroke-gray-300 stroke-gray-700 flex" fill="none" viewBox="0 0 24 24"><g clip-path="url(#a)"><path stroke="slate" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.001h18m-18 6h18m-18 6h18"/></g><defs><clipPath id="a"><path fill="gray" d="M0 .001h24v24H0z"/></clipPath></defs></svg>
{{--            <svg id="burger2" xmlns="http://www.w3.org/2000/svg" class="w-8 lg:hidden dark:stroke-gray-300 flex dark:hidden" fill="none" viewBox="0 0 24 24"><g clip-path="url(#a)"><path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.001h18m-18 6h18m-18 6h18"/></g><defs><clipPath id="a"><path fill="gray" d="M0 .001h24v24H0z"/></clipPath></defs></svg>--}}
        </div>

        <ul class="flex-row text-sm xl:text-base gap-4 mx-auto hidden lg:flex w-1/2 lg:justify-around">
            <li>
                <a class="{{ request()->routeIs('/') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
                   href="{{route('/')}}">Accueil</a></li>
            <li>
                <a class="{{ request()->routeIs('savoir-faire') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
                   href="{{route('savoir-faire')}}">Savoir-faire</a></li>
            <li>
                <a class="{{ request()->routeIs('galerie') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
                   href="{{route('galerie')}}">Galerie</a></li>
            <li>
                <a class="{{ request()->routeIs('references') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
                   href="{{route('references')}}">Références</a></li>
            <li>
                <a class="{{ request()->routeIs('destock') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
                   href="{{route('destock')}}">Destock</a></li>
            <li>
                <a class="{{ request()->routeIs('contact') ? 'dark:text-blue-300 text-violet-700 font-bold underline' : null }} "
                   href="{{route('contact')}}">Contact & Devis</a></li>
        </ul>
        <label for="theme" class="flex-row items-center justify-center hover:cursor-pointer p-4 hidden lg:flex w-1/5">
            <svg class="w-6 xl:w-8 dark:fill-amber-200 fill-amber-700 hv" xmlns="http://www.w3.org/2000/svg"
                 xml:space="preserve" viewBox="0 0 207.628 207.628">
                <circle cx="103.814" cy="103.814" r="45.868"/>
                <path
                    d="M103.814 157.183c-29.427 0-53.368-23.941-53.368-53.368s23.941-53.368 53.368-53.368 53.368 23.941 53.368 53.368-23.941 53.368-53.368 53.368zm0-91.737c-21.156 0-38.368 17.212-38.368 38.368s17.212 38.368 38.368 38.368 38.368-17.212 38.368-38.368-17.212-38.368-38.368-38.368zM103.814 39.385a7.5 7.5 0 0 1-7.5-7.5V7.5a7.5 7.5 0 0 1 15 0v24.385a7.5 7.5 0 0 1-7.5 7.5zM103.814 207.628a7.5 7.5 0 0 1-7.5-7.5v-24.385a7.5 7.5 0 0 1 15 0v24.385a7.5 7.5 0 0 1-7.5 7.5zM200.128 111.314h-24.385a7.5 7.5 0 0 1 0-15h24.385a7.5 7.5 0 0 1 0 15zM31.885 111.314H7.5a7.5 7.5 0 0 1 0-15h24.385a7.5 7.5 0 0 1 0 15zM154.676 60.452a7.474 7.474 0 0 1-5.303-2.197 7.5 7.5 0 0 1 0-10.606l17.243-17.242a7.498 7.498 0 0 1 10.606 0 7.5 7.5 0 0 1 0 10.606l-17.243 17.242a7.474 7.474 0 0 1-5.303 2.197zM35.709 179.419a7.474 7.474 0 0 1-5.303-2.197 7.5 7.5 0 0 1 0-10.606l17.243-17.243a7.5 7.5 0 0 1 10.606 0 7.5 7.5 0 0 1 0 10.606l-17.243 17.243a7.472 7.472 0 0 1-5.303 2.197zM171.918 179.419a7.474 7.474 0 0 1-5.303-2.197l-17.243-17.243a7.5 7.5 0 0 1 0-10.606 7.5 7.5 0 0 1 10.606 0l17.243 17.243a7.5 7.5 0 0 1 0 10.606 7.472 7.472 0 0 1-5.303 2.197zM52.952 60.452a7.474 7.474 0 0 1-5.303-2.197L30.406 41.013a7.5 7.5 0 0 1 0-10.606 7.498 7.498 0 0 1 10.606 0l17.243 17.242a7.5 7.5 0 0 1 0 10.606 7.472 7.472 0 0 1-5.303 2.197z"/>
            </svg>
            <span class="sr-only">Toggle</span>
            <button id="theme" name="theme"
                    x-on:click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode.toString());"
                    x-bind:class="darkMode ? 'after:translate-x-5' : 'after:translate-x-0'"
                    class="dark:bg-gray-300 xl:w-12 xl:h-7 w-10 h-5 rounded-full flex flex-shrink-0 items-center dark:after:bg-slate-900 bg-gray-700 after:bg-blue-100 xl:after:w-5 after:w-3 xl:after:h-5 after:h-3 after:rounded-full p-1 ease-in-out duration-500 after:ease-in-out after:duration-500 ml-4 mr-4">
            </button>
            <svg class="w-6 xl:w-8 dark:fill-gray-300 fill-slate-700" xmlns="http://www.w3.org/2000/svg"
                 xml:space="preserve" viewBox="0 0 30.457 30.457">
                <path
                    d="M29.693 14.49a1.18 1.18 0 0 0-1.32.353 9.37 9.37 0 0 1-7.27 3.446c-5.183 0-9.396-4.216-9.396-9.397a9.3 9.3 0 0 1 2.963-6.835 1.18 1.18 0 0 0 .264-1.343A1.171 1.171 0 0 0 13.75.03 15.172 15.172 0 0 0 0 15.194c0 8.402 6.836 15.238 15.238 15.238 8.303 0 14.989-6.506 15.219-14.812a1.169 1.169 0 0 0-.764-1.13z"/>
            </svg>
        </label>
    </nav>
</div>
