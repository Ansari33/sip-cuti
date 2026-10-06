<?php

namespace App\Livewire\LandingSet;

use App\Models\LandingSet;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = LandingSet::all();
        return view('livewire.landing-set.index', compact('data'));
    }
}
