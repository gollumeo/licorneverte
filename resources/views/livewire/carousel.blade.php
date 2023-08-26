<div class="owl-carousel" wire:poll>
    @foreach($images as $image)
        <div class="item">
            <img src="{{ asset('assets/' . $image) }}" alt="...">
        </div>
    @endforeach
</div>
