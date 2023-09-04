<div class="max-w-full flex flex-col m-auto content-center justify-center items-center">
    <div class="flex items-center content-center overflow-x-hidden w-full">
        @foreach($images as $index => $image)
            <img
                class="image-{{$index + 1}} relative sm:p-5 min-w-full sm:max-h-screen w-screen md:w-full object-contain shadow-none"
                src="{{ asset('assets/' . $image) }}" alt="{{pathinfo($image, PATHINFO_FILENAME)}}">
        @endforeach
    </div>
    <div
        class="fixed lg:top-32 lg:bottom-0 bottom-20 m-auto right-0 left-0 flex flex-row justify-between w-11/12 h-full items-center px-2">
        <button onclick="show(-1)"
                class="flex items-center justify-center text-black bg-gray-50 h-11 w-11 rounded-full shadow-lg shadow-black hover:scale-110 active:scale-110 transition-transform duration-200">
            &lt;
        </button>
        <button onclick="show(+1)"
                class="flex items-center justify-center text-black bg-gray-50 h-11 w-11 rounded-full shadow-lg shadow-black hover:scale-110 active:scale-110 transition-transform duration-200">
            &gt;
        </button>
    </div>
</div>
