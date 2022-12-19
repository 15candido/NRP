<?php

namespace App\Http\Livewire\Volunteers;

use App\Http\Livewire\Modal;
use Livewire\Component;


class Register extends Modal
{
   
    public function render()
    {
        return view('livewire.volunteers.register');
    }
}
