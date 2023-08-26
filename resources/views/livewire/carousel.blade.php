<div class="h-full">
    <div class="owl-carousel owl-theme">
        <div class="flex flex-row content-center items-center justify-center ">
            <div class="item">
                <img src="{{ asset('assets/' . ($currentIndex - 1 < 0 ? $images[14] : $images[$currentIndex - 1])) }}"
                     alt="..." class="h-24">
            </div>
            <div class="item">
                <img src="{{ asset('assets/' . $images[$currentIndex]) }}" class="h-24">
            </div>
            <div class="item">
                <img src="{{ asset('assets/' . ($currentIndex + 1 > 14 ? $images[0] : $images[$currentIndex + 1])) }}"  class="h-24">
            </div>
        </div>
    </div>
    <button wire:click="previousImage">Précédent</button>
    <button wire:click="nextImage">Suivant</button>
</div>
