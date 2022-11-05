<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class Impact extends Component
{
    public $impacts;
    public function __construct($impacts)
    {
        $this->impacts = $impacts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.impact');
    }
}
