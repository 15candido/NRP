<?php

namespace App\Http\Livewire\Volunteers;

use App\Http\Livewire\Modal;
use Livewire\Component;

class DefaultRegisterModal extends Modal
{
    
    public function render()
    {
        return view('livewire.volunteers.default-register-modal');
    }
}

