<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Teste extends Component
{
    public $user_id;
    public $user;

    public function render()
    {        
        return view('livewire.teste');
    }

    public function procura()
    {
        $this->user = User::find($this->user_id);
    }
}
