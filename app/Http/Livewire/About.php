<?php

namespace App\Http\Livewire;

use Livewire\Component;

class About extends Component
{
    public function mount()
    {
        dd('About Component: Mount');
    }

    public function render()
    {
        dd('About Component: Render');
        return view('livewire.about');
    }
}
