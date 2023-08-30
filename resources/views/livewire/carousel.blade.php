<div class="slider">

    @foreach($images as $image)
        <div class="slide">
            <img class="w-full h-full object-cover swiper-slide" src="{{ asset('assets/' . $image) }}" alt="...">
        </div>
    @endforeach
        <button class="bg-gray-50 w-12 h-12 text-slate-800 text-center text-lg rounded-full font-bold">&lt;</button>
        <button class="bg-gray-50 w-12 h-12 text-slate-800 text-center text-lg rounded-full font-bold">&gt;</button>
</div>
