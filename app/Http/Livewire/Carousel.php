<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Carousel extends Component
{

    public array $images = [
        'villa-lorraine_2021.jpg',
        'hasard_2018.jpg',
        'boucheron_01.jpg',
        'boucheron_02.jpg',
        'boucheron_03.jpg',
        'boucheron_04.jpg',
        'tutte.jpg',
        'st-louis_01.jpg',
        'st-louis_02.jpg',
        'monsieur.jpg',
        'ardouvin.jpg',
        'plaisirs.jpg',
        'avignon.jpg',
        'octobre.jpg',
        'grandville.jpg'
    ];

    public int $currentIndex = 0;

    public bool $isTransitioning;

    public function nextImage(): void
    {
        $this->isTransitioning = true;
        $this->currentIndex = ($this->currentIndex + 1) % count($this->images);
        $this->dispatchBrowserEvent('disable-transition', ['delay' => 500]);
    }

    public function previousImage(): void
    {
        $this->isTransitioning = true;
        $this->currentIndex = ($this->currentIndex - 1 + count($this->images)) % count($this->images);
        $this->dispatchBrowserEvent('disable-transition', ['delay' => 500]);
        $this->isTransitioning = false;
    }



    public function render()
    {
        return view('livewire.carousel');
    }
}
