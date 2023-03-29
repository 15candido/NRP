<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class Infocard extends Component
{
    // public $infocard;
    public function __construct()
    {
        // $this->infocard = $infocard;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.infocard');
    }
}
