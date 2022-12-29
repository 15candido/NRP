<?php

namespace App\Http\Livewire\Needs;

use App\Models\ItemsOfNeeds;
use App\Models\Need;
use Livewire\Component;
use Livewire\WithPagination;

class RegisterNeeds extends Component
{

    use WithPagination;

    public $items = 1, $needId = 1; 

    public function render()
    {
       

        // Get The Need 
        $need = Need::find($this->needId);
        // Get The Items For The Need
        $items = $need->itemsOfneed;

        return view('livewire.needs.register-needs', [
           'itemsOfNeed' => $items,
           'need' => $need
        ]);
    }
}
