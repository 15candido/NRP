<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class partner extends Component
{
    public $partners;
    public function __construct($partners)
    {
        $this->partners = $partners;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.partner');
    }
}
