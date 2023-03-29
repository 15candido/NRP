<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class Imagecard extends Component
{
    // public $image;
    public function __construct()
    {
        // $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.imagecard');
    }
}
