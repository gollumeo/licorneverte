<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Carousel extends Component
{

    use WithPagination;

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

    public array $imageDescription = [
        "Mirabelliers dans les salons du prestigieux restaurant bruxellois La Villa Lorraine, 2021.",
        "Décors végétaux du Jeu de l’amour et du hasard pour la mise en scène de Catherine Hiegel, 2018.",
        "La nature reprend ses droits dans les salons de Boucheron, joallier place Vendôme, 2017.",
        "La nature reprend ses droits dans les salons de Boucheron, joallier place Vendôme, 2017.",
        "La nature reprend ses droits dans les salons de Boucheron, joallier place Vendôme, 2017.",
        "La nature reprend ses droits dans les salons de Boucheron, joallier place Vendôme, 2017.",
        "Pommiers pour Bruno de Lavenère sur le décor de Così fan tutte, 2016.",
        "Sapins des Vosges pour les cristalleries de Saint-Louis au salon MAISON&OBJETS, 2015.",
        "Stand des cristalleries de Saint-Louis au salon MAISON&OBJETS, 2015.",
        "7 espèces d’arbres assemblées pour Monsieur, œuvre de Fabrice Langlade, 2013.",
        "Arbre déraciné réalisé pour l’œuvre de Pierre Ardouvin La tempête, 2011.",
        "Cerisier en fleurs confectionné pour la compagnie Les Menus Plaisirs, 2011.",
        "Une forêt conçue pour la chorégraphe Gisèle Vienne au festival d’Avignon, 2010.",
        "Prunus en fleurs, suspendu pour la compagnie Mi-Octobre, 2009.",
        "Mirabellier dans la grande salle du Château de Cons-la-Grandville, 2005."
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
//        $paginatedImages = collect($this->images)->paginate(3);

        return view('livewire.carousel');
    }
}
