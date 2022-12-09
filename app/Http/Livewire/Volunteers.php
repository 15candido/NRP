<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Volunteers extends Component
{
    public function render()
    {
        return view('livewire.volunteers')
        ->layout('layouts.guest');
    }
}
