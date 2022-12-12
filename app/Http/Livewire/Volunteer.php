<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Volunteer extends Component
{
    public function render()
    {
        return view('livewire.volunteer')
            ->layout('layouts.guest');

    }
}
