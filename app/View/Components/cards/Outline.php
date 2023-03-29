<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class Outline extends Component
{
    public $outline;
    public function __construct($outline)
    {
        $this->outline = $outline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.outline');
    }
}
