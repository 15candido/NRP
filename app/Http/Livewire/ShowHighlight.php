<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowHighlight extends Component
{  
    public $highlight;    

    public function mount()
    {
        $this->highlight = \App\Models\Highlight::all()->random(1)->first();
    }

    public function render()
    {    
        return view('livewire.show-highlight');
    }

    public function refresh()
    {        
        $this->highlight = \App\Models\Highlight::where('id', '!=', $this->highlight->id)->get()->random(1)->first();
    }
}
