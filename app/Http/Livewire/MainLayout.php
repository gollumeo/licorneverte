<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class MainLayout extends Component
{
    public string $page = 'home'; // Default page

    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.main-layout', [
            'pageComponent' => $this->pageComponent()
        ]);
    }

    private function pageComponent(): string
    {
        return match ($this->page) {
            'about' => About::class,
            // Add more pages as needed
            'home' => Home::class
        };
    }
}
