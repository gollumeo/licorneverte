<div>
    @foreach($images as $image)
            <img class="swiper-slide" src="{{ asset('assets/' . $image) }}" alt="...">
    @endforeach
</div>
